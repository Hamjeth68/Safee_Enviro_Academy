<?php

namespace App\Http\Controllers;



class AdminController extends Controller
{
    public function index(){
        return view('adminpanel');
    }

    public function UserManagment()
    {
       return view('users');
    }

    public function CourseData()
    {
        return view('courses');
    }

    public function GetReports(){
        return view('reports');
    }

    public function logAdmin(){
        return view('adminlogin');
    }
}
