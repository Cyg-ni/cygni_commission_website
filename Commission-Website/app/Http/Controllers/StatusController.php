<?php

namespace App\Http\Controllers;

use App\Models\Commission;

class StatusController extends Controller
{
    public function index()
    {
        $commissions = Commission::orderByDesc('date_started')
            ->orderByDesc('created_at')
            ->get();

        return view('status', ['commissions' => $commissions]);
    }
}
