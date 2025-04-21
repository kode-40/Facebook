<?php

namespace App\Http\Controllers\status;

use App\Http\Controllers\Controller;
use App\Models\status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
    public function index()
    {
        return View('status');
    }

    public function store(Request $request)
    {
        status::create([
            'text' => $request->text,
            'user_id' => Auth::id(),
        ]);

        return Redirect()->route('home');
    }
}
