<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Student,User};

class AdminController extends Controller
{
    public function dashbord(){
        $data['total_students']=Student::all()->count();
        $data['total_user']=User::all()->count();
        return view("admin.dashbord",$data);
    }
    public function manageUser(){
        $data["user"]=User::all();
        return view("admin.manageUser",$data);
    }
    public function manageStudent(){
        $data["student"]=Student::all();
        return view("admin.manageStudent",$data);

    }
    public function userdelete($id){
        $data=User::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function studentdelete($id){
        $data=student::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function view($roll){
                $data=User::find($roll);
$data=student::find($roll);
        
        return view("admin.view",["stu"=>$data]);
    }
}
