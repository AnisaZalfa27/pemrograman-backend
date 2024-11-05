<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Student


class StudentController extends Controller
{
    public function index() {
        $students = Student::all();

        $response = [
            'message' => 'Success Showing All Students Data',
            'data' => $students
        ];
        
        return response()->json($response, 200);

    }

    public function store(Request $request){

        $input = [
            'name' => $request ->name,
            'nim' => $request ->nim,
            'email' => $request ->email,
            'majority' => $request ->majority

        ];

        $students = Student::create($input);

        $response = [
            'message' => 'Succesfully Create new student',
            'data' => $students
        ];
        return response()->json($response, 201);
    }

    public function show(string $id){
        
    }

    public function update(Request $request, string $id){
        if ($student){

            $input = [
                'name' => $request ->name ?? $student->name,
                'nim' => $request ->nim ?? $student->nim,
                'email' => $request ->email ?? $student->email,
                'majority' => $request ->majority ?? $student->majority
            ]

            $student->update($input);

            $response = [
                'message' => 'Student Not Found',
                'data' => $student
            ];

            return response()->json($response, 200)
        }else {
            $response = [
                'message' => 'Student Not Found'
            ]
        }
    }
}


