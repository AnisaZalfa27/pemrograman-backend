<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $students = Student::all();

        $response = [
            'message' => 'Success Showing All Students Data',
            'data' => $students
        ];
        
        return response()->json($response, 200);

    }
}
