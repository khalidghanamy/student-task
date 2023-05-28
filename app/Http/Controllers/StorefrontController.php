<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StorefrontController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'grade' => 'required|integer',
        ]);

        Student::create($validatedData);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function create()
    {
    return view('create');
    }

}
