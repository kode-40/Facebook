<?php

namespace App\Http\Controllers\comment;

use App\Models\status;
use App\Models\comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function detail(Request $request, $id)
    {
        $status = status::where('id', $id)->firstOrFail();
        return View('comment', [
            'status' => $status
        ]);
    }

    public function store(Request $request, $id)
    {
        $status = status::findOrFail($id);
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['status_id'] = $status->id;
        comment::create($data);

        return Redirect()->route('home');
    }
}
