<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\status;

class HomeController extends Controller
{
    public function index()
    {
        $statuses = status::with('user', 'comment')->get();

        return View('home', [
            'statuses' => $statuses
        ]);
    }

    public function destroy(Request $request): RedirectResponse
    {
        $request->session()->invalidate();

        $request->session()->regenerate();

        return redirect()->route('login');
    }
}
