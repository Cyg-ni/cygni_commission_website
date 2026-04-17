<?php

namespace App\Http\Controllers;

use App\Models\Commission;
use Throwable;

class StatusController extends Controller
{
    public function index()
    {
        try {
            $commissions = Commission::orderByDesc('date_started')
                ->orderByDesc('created_at')
                ->get();
        } catch (Throwable $exception) {
            report($exception);

            $commissions = collect();

            return view('status', ['commissions' => $commissions])
                ->with('warning', 'The commission queue is temporarily unavailable, so the page is showing an empty list for now.');
        }

        return view('status', ['commissions' => $commissions]);
    }
}
