<?php

namespace App\Http\Controllers;

use App\Models\Commission;
use Illuminate\Http\Request;

class CommissionController extends Controller
{
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
