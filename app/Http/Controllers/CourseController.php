<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    
    public function index()
    {
        $data["course"] = Course::all();
        return view("admin.course.course",$data);
    }

    
    public function create()
    {
        return view("admin.course.insertCourse");
    }

    
    public function store(Request $request)
    {
        if($request->isMethod('post')){
            $data=$request->validate([
                'title'=>'required',
                'duration'=>'required',
                'status'=>'required',
                'category'=>'required',
                'fee'=>'required',
                'discount_fee'=>'required',
                'description'=>'required',
            ]);
            Course::create($data);
            return redirect()->route("course.index");
        }
        
    }

    
    public function show(Course $course)
    {
        
    }

    
    public function edit(Course $course)
    {
        $data['course']=$course;
        return view("admin.course.editCourse",$data);
    }

    
    public function update(Request $request, Course $course)
    {
        
        $data=$request->validate([
            'title'=>'required',
            'duration'=>'required',
            'status'=>'required',
            'category'=>'required',
            'fee'=>'required',
            'discount_fee'=>'required',
            'description'=>'required',
        ]);
        $course->update($data);
        return redirect()->route("course.index");
        
    }


    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route("course.index");
    }
}
 