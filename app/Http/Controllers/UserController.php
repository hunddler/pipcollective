<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UserGuide;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function UserDashboard()
    {
        $userguide = UserGuide::get();
        return view('users.userguide',compact('userguide'));

    }

    public function UserCourses()
    {
        
        return view('users.usercourses');

    }

    public function UserSetfiles()
    {
        
        return view('users.setfiles');

    }
    public function UserInputs()
    {
        
        return view('users.inputs');

    }

    public function UserFaq()
    {
        
        return view('users.faq');

    }
}
