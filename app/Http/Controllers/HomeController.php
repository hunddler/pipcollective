<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        if (Auth::user()->role == 'admin') {
            return redirect()->to('admin/user-guide');
        } else {
            Auth::logout();
            return back()->with('error', 'You have not Access For Officer');
        }
        // return view('home');
    }
}
