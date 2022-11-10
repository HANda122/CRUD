<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        
        return view('student\index', [
            'students' => Student::get(),
        ]);
    }

    public function create(){
        return view('student.create');
    }

    public function store(Request $request){
        
       $student = new Student();
       $student->name = $request->name;
       $student->phone_number = $request->phone_number;
       $student->address = $request->address;
       $student->class = $request->class;


       $student->save();

       return back();
    }

    public function edit($id){

            $student = Student::find($id);
           return view('student.edit', ['student' => $student,]);

            
    }

    public function update(Request $request, $id){
        $student = Student::find($id);
        $student->name = $request->name;
        $student->phone_number = $request->phone_number;
        $student->address = $request->address;
        $student->class = $request->class;
 
 


       $student->save();

       return redirect()->route('students.index');

    }

    public function delete($id){
        $student = Student::find($id);
       $student->delete();

       return redirect()->route('students.index');



    }
}