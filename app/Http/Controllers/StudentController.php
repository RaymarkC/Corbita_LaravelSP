<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student; // Ensure this matches your Model name
use Illuminate\Support\Facades\Redirect; 

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all(); 
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'course' => 'required',
            'year_level' => 'required',
        ]);

        Student::create($request->all());
        return redirect('/students')->with('success', 'Student added to MySQL Database!');
    }

    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'course' => 'required',
            'year_level' => 'required',
        ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());

        return redirect('/students')->with('success', 'Student updated successfully!');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect('/students')->with('success', 'Student removed from database!');
    }
}  