<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('admin.students.index',compact('students'));
    }

    public function show($id)
    {
     $student = Student::find($id);
     if($student==null){
        return abort(404);
     }   
       dd($student);
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function store(Request $request)
    {

        $student = Student::firstOrNew(['email'=>$request->email]);
        $student->name = $request->name;
        $student->address= $request->address;
        $student->birthdate = $request->birthdate;
        $student->save();

        $request->session()->flash('message', 'Student has been created');

        return redirect('/admin/students');

        // $validate = Validator::make($request->all(),[
        //     'name'=>'required|string',
        //     'email'=>'required|email',
        //     'birthdate'=>'required|date',
        // ]);

    // return redirect()->back()->withInput();
       
    }
    
}
