<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    
    public function index()
    {
        $students = Student::all();
        return view('student',['students' =>$students, 'layout'=>'index']);
    }
    
    /*-----------------------------------------------------------------------------------*/
   
    public function create()
    {
        $students = Student::all();
        return view('student',['students' =>$students, 'layout'=>'create']);
    }
    
    /*-----------------------------------------------------------------------------------*/
     
    public function store(Request $request)
    {
        $studen = new Student();
        $studen->Cne = $request->input('Cne');
        $studen->FirstName = $request->input('FirstName');
        $studen->SecondName = $request->input('SecondName');
        $studen->Age = $request->input('Age');
        $studen->Speciality = $request->input('Speciality');
        $studen->save();
        return redirect('/');

    }

    /*-----------------------------------------------------------------------------------*/
    
    public function show($id)
    {
        $student = Student::all($id);
        $students = Student::all();
        return view('student', ['students' =>$students, 'student'=>$student, 'layout'=>'show']);
    }

    /*-----------------------------------------------------------------------------------*/
   
    public function edit($id)
    {
        $student = Student::find($id);
        $students = Student::all();
        return view('student', ['students' =>$students, 'student'=>$student, 'layout'=>'edit']);
    }

    /*-----------------------------------------------------------------------------------*/
    
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->Cne = $request->input('Cne') ;
        $student->FirstName = $request->input('FirstName') ;
        $student->SecondName = $request->input('SecondName') ;
        $student->Age = $request->input('Age') ;
        $student->Speciality = $request->input('Speciality') ;
        $student->save() ;
        return redirect('/') ;
    }

    /*-----------------------------------------------------------------------------------*/


    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/');
    }
}
