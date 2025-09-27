<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
 public function store(Request $request)
    {
        $student = Student::create([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return response()->json($student, 201);
    }

    public function index()
    {
        return Student::all();
    }
}
