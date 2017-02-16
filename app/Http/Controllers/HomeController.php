<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Message;

class HomeController extends Controller
{
    public function index() {
        $data = [
            'title' => 'GuestBook',
            'pagetitle' => 'Guestbook',
            'messages' => Message::latest()->get(),
            'count' => Message::count()
        ];
        return view('pages.messages.index')->with($data);
    }

    public function edit($id) {
        return view('pages.messages.edit');
    }
}
