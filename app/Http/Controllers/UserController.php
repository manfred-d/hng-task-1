<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(request $request){
        return response()->json([
            'slackUsernameslackUsername' => "Manfred",
            'backend' => true,
            'age' => 23,
            'bio' => "I am a student, Full-Stack Dev. I am glad to be here to learn",
        ]);
    }
}
