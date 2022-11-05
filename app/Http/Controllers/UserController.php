<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(request $request){
        return response()->json([
            'slackUsername' => "Manfred",
            'backend' => true,
            'age' => 23,
            'bio' => "I am a student, Full-Stack Dev. I am glad to be here to learn",
        ]);
    }

    // hngi task 2
    public function calculate(request $request){
        
        $x = $request->input('x');
        $y = $request->input('y');
        $operation_type = $request->input('operation_type');


        if ($operation_type == 'addition') {
            $result = $x + $y;
            // return response()->json($content);
        }
        elseif ($operation_type == 'subtraction') {
            $result = $x - $y;
        }
        elseif ($operation_type == 'multiplication') {
            $result = $x * $y;
            // return response()->json($result);
        }
        elseif ($operation_type == 'division') {
            if ($y == 0) {
                abort(400);
            }
            $result = round($x / $y);
            // return response()->json(round($result));
        }
        return response()->json([
            'slackUsername' => 'Manfred',
            'result' => $result,
            'operation_type' => $operation_type
        ]);

        $response = json_decode($response->getContent());
    }
}
