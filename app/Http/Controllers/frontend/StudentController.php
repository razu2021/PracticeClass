<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //


    public function index(){
        return view('frontend.student.index');
    }

    public function login(){
        return view('frontend.student.login');
    }

    public function register(){
        return view('frontend.student.register');
    }
    
    public function profile(){
        return view('frontend.student.register');
    }

}
