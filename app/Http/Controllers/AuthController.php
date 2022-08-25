<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Hash;
use Auth;

class AuthController extends Controller
{
    public function teacherLogin(Request $req){
        if($req->isMethod("post")){
            $req->validate([
                'email'=>'required',
                'password'=>'required',
            ]);
            $data=$req->only("email","password");
            if(Auth::guard("teacher")->attempt($data)){
                return redirect()->route("admin.index");
            }
            else{
                $req->session()->flash("error","not admin login");
                return redirect()->back();
            }
        }
        return view('admin.login');
    }


    public function login(Request $req){
        if($req->isMethod("post")){
            $req->validate([
                "email"=>"required",
                "password"=>"required",
            ]);
            $auth =$req->only("email","password");
            if(Auth::guard("web")->attempt($auth)){
                return redirect()->route("student.index");
            }
            else{
                $req->session()->flash("error","not login");
                return redirect()->back();
            }
        }
        else{
            return view("auth.login");
        }
    }
    public function singup(Request $req){
        if($req->isMethod("post")){
            $req->validate([
                "name"=>"required",
                "contact"=>"required",
                "email"=>"required:email|unique:users",
                "password"=>"required|min:6",
            ]);
            $user= new User();
            $user->name=$req->name;
            $user->contact=$req->contact;
            $user->password=Hash::make($req->password);
            $user->email=$req->email;
            $user->save();
            return redirect()->route("login");

        }
        else{
            return view("auth.singup");
        }
        

    }
    public function logout(Request $req){
        session()->flush("msg","logout page");
        Auth::logout();
        return redirect()->route("login");

    }
    public function reset_password(){

    }
}
