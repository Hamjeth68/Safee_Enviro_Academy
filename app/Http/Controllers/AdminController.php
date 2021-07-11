<?php

namespace App\Http\Controllers;
use App\Models\User;


class AdminController extends Controller
{
    public function AdminList()
    {
        $users = User::all();
        // return response()->json(['students' => $students], 200);
        return view('admins', compact('users'));
    }

    public function index()
    {
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

    public function GetReports()
    {
        return view('reports');
    }

    public function logAdmin()
    {
        return view('adminlogin');
    }
}
