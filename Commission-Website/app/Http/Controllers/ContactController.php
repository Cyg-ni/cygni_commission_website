<?php

namespace App\Http\Controllers;

use App\Mail\NewCommissionRequestMail;
use App\Models\Commission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Throwable;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_name' => ['required', 'string', 'max:100'],
            'client_email' => ['required', 'email', 'max:255'],
            'client_discord' => ['nullable', 'string', 'max:100'],
            'commission_type' => ['required', 'string', 'max:100'],
            'budget' => ['nullable', 'string', 'max:100'],
            'deadline' => ['nullable', 'date'],
            'project_brief' => ['required', 'string', 'max:5000'],
            'notes' => ['nullable', 'string', 'max:1000'],
        ]);

        $commission = Commission::create([
            'commissioner_name' => $validated['client_name'],
            'commissioner_email' => $validated['client_email'],
            'commissioner_discord' => $validated['client_discord'],
            'commission_type' => $validated['commission_type'],
            'budget' => $validated['budget'],
            'deadline' => $validated['deadline'],
            'project_brief' => $validated['project_brief'],
            'notes' => $validated['notes'],
            'date_started' => now()->toDateString(),
            'payment_status' => 'yet_to_receive',
            'phase' => 'sketch',
        ]);

        try {
            Mail::to(config('app.owner_email'))->send(new NewCommissionRequestMail($commission));
        } catch (Throwable $exception) {
            report($exception);

            return redirect()->route('contact')->with('success', 'Commission request submitted successfully!')->with('warning', 'Your request was saved, but notification email could not be sent.');
        }

        return redirect()->route('contact')->with('success', 'Commission request submitted successfully! I sent a notification to the owner email.');
    }
}