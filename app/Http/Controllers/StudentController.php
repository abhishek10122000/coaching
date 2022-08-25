<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Auth;
class StudentController extends Controller
{
    
    public function index()
    {
        $data['checkStudent']=Student::where("user_id",Auth::id())->first();
        return view("studentPanel.profile",$data);
    }

    
    public function create()
    {
        if(Student::where("user_id",Auth::id())->exists()){
            return redirect()->route("student.index");
        }
        return view("public.apply");
    }

    
    public function store(Request $request)
    {
        $request->validate([
            "father_name"=>"required",
            "motherName"=>"required",
            "dob"=>"required",
            "address"=>"required",
            "education"=>"required",
            "gender"=>"required",
        ]);
        $s=new Student();
        $s->user_id=Auth::id();
        $s->father_name=$request->father_name;
        $s->mother_name=$request->motherName;
        $s->address=$request->address;
        $s->dob=$request->dob;
        $s->education=$request->education;
        $s->gender=$request->gender;
        $s->save();
        return redirect()->route("homepage");
    }

    
    public function show(Student $student)
    {
        //
    }

    
    public function edit(Student $student)
    {
        //
    }

    
    public function update(Request $request, Student $student)
    {
        //
    }

    
    public function destroy(Student $student)
    {
        //
    }
}
