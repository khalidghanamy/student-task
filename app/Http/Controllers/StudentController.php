<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('dashboard.students.index', compact('students'));
    }

    public function create()
    {
        return view('dashboard.students.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'grade' => 'required|integer',
        ]);

        Student::create($validatedData);

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function edit(Student $student)
    {
        return view('dashboard.students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'grade' => 'required|integer',
        ]);

        $student->update($validatedData);

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}
