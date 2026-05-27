<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class studentController extends Controller
{
    public function index(){
        $students = student::all();

        return view('studentmngt.index', compact('students'));
    }

    public function create()
    {
        return view('studentmngt.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'midname' => 'required|string|max:255',
            'add' => 'required|string|max:255',
            'dob' => 'required|date',
        ]);

        // Create a new student record in the database
        \App\Models\student::create($validatedData);

        // Redirect to the student index page with a success message
        return redirect()->route('studentmngt.index')->with('success', 'Student created successfully.');
    }


    public function edit(int $id)
    {
        $student = student::findOrFail($id);

        return view('studentmngt.edit', compact('student'));
    }

    public function update(Request $request, int $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'midname' => 'nullable|string|max:255',
            'add' => 'required|string|max:255',
            'dob' => 'required|date',
        ]);

        // Find the student record and update it with the validated data
        $student = student::findOrFail($id);
        $student->update($validatedData);

        // Redirect to the student index page with a success message
        return redirect()->route('studentmngt.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(int $id)
    {
        $student = student::findOrFail($id);
        $student->delete();

        return redirect()->route('studentmngt.index')->with('success', 'Student deleted successfully.');
    }
    

}
