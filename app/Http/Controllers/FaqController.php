<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\UserGuide;
use App\Models\Courses;
use App\Models\Setfile;
use App\Models\FaqCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Facades\Http;

class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Faq()
    {
    
        return view('admin.Faq');

    }

    public function storeFaqCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
    
        $userGuide = new FaqCategory();
        $userGuide->title = $request->title;
        $userGuide->save();
    
        return response()->json(['success' => 'Category Added successfully.']);
    }
}
