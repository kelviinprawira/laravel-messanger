<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ChatShowController extends Controller
{
    public function __invoke(Chat $chat)
    {
        return Inertia::render('Chat/Show');
    }
}
