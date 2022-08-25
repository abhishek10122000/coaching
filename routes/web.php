<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AuthController,StudentController,HomeController,AdminController,CourseController};



Route::match(["get","post"], "/auth/login",[AuthController::class,"login"])->name("login");
Route::match(["get","post"], "/auth/singin",[AuthController::class,"singup"])->name("singin");
Route::get("/",[HomeController::class,"index"])->name("homepage");
Route::get("/logout",[AuthController::class,"logout"])->name("logout");


Route::prefix("admin")->group(function(){
    Route::match(["get","post"],"/login",[AuthController::class,"teacherLogin"])->name("teacher.login");

    Route::resource('course', CourseController::class);

    Route::controller(AdminController::class)->group(function(){

        Route::get("/inde","dashbord")->name("admin.index");
        Route::get("/user","manageUser")->name("admin.user");
        Route::get("/student","manageStudent")->name("admin.student");
        Route::get("/{id}/userdelete/","userdelete")->name("userdelete");
        Route::get("/{id}/studentdelete/","studentdelete")->name("studentdelete");
        Route::get("/{roll}/view/","view")->name("view");
    
    
    });
});




Route::middleware(['auth'])->group(function(){
    Route::resource("student",StudentController::class);
});