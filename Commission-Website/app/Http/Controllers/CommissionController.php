<?php

namespace App\Http\Controllers;

use App\Models\Commission;
use Illuminate\Http\Request;

class CommissionController extends Controller
{
    public function create()
    {
        abort_unless(auth()->user()?->email === config('app.owner_email'), 403);

        return view('commissions.create');
    }

    public function store(Request $request)
    {
        abort_unless(auth()->user()?->email === config('app.owner_email'), 403);

        $validated = $request->validate([
            'commissioner_name' => ['required', 'string', 'max:100'],
            'commissioner_email' => ['required', 'email', 'max:255'],
            'commissioner_discord' => ['nullable', 'string', 'max:100'],
            'commission_type' => ['required', 'string', 'max:100'],
            'budget' => ['nullable', 'string', 'max:100'],
            'deadline' => ['nullable', 'date'],
            'project_brief' => ['required', 'string', 'max:5000'],
            'notes' => ['nullable', 'string', 'max:1000'],
            'date_started' => ['required', 'date'],
            'payment_status' => ['required', 'in:yet_to_receive,paid,fully_paid'],
            'phase' => ['required', 'in:sketch,lineart,rendering'],
        ]);

        Commission::create($validated);

        return redirect()->route('status')->with('success', 'Commission added successfully!');
    }

    public function edit(Commission $commission)
    {
        abort_unless(auth()->user()?->email === config('app.owner_email'), 403);

        return view('commissions.edit', ['commission' => $commission]);
    }

    public function update(Request $request, Commission $commission)
    {
        abort_unless(auth()->user()?->email === config('app.owner_email'), 403);

        $validated = $request->validate([
            'payment_status' => 'required|in:yet_to_receive,paid,fully_paid',
            'phase' => 'required|in:sketch,lineart,rendering',
            'notes' => 'nullable|string|max:500',
        ]);

        $commission->update($validated);

        return redirect()->route('status')->with('success', 'Commission updated successfully!');
    }
}
