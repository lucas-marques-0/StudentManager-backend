<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class StudentController extends Controller
{
    public function index()
    {
        $database = App::make('firebase.database');
        $studentsRef = $database->getReference('students');
        $students = $studentsRef->getValue();

        return response()->json($students);
    }

    public function store(Request $request)
    {
        $database = App::make('firebase.database');
        $studentsRef = $database->getReference('students');

        $newStudentRef = $studentsRef->push();

        $newStudentRef->set([
            'id' => $newStudentRef->getKey(), 
            'email' => $request->email,
            'name' => $request->name,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['success' => true, 'student' => $newStudentRef->getValue()]);  
    }

    public function update(Request $request, $id)
    {
        $database = App::make('firebase.database');
        $studentsRef = $database->getReference("students/{$id}");
    
        $studentsRef->update([
            'email' => $request->email,
            'name' => $request->name,
            'updated_at' => now(),
        ]);
    
        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        $database = App::make('firebase.database');
        $studentsRef = $database->getReference("students/{$id}");
    
        $studentsRef->remove();
    
        return response()->json(['success' => true]);
    }
}
