<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $ownerEmail = (string) config('app.owner_email');
        $ownerPassword = (string) env('OWNER_PASSWORD', '');

        if ($credentials['email'] === $ownerEmail && filled($ownerPassword)) {
            User::query()->firstOrCreate(
                ['email' => $ownerEmail],
                [
                    'name' => (string) env('OWNER_NAME', 'Cygni'),
                    'password' => Hash::make($ownerPassword),
                ]
            );
        }

        if (! Auth::attempt($credentials, $request->boolean('remember'))) {
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ])->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect()->intended(route('status'));
    }

    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
