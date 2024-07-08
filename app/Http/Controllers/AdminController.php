<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class AdminController extends Controller
{
    public function Dashboard()
    {
    
        return view('admin.user-guide');

    }

    public function Courses()
    {
    
        return view('admin.courses');

    }
}
