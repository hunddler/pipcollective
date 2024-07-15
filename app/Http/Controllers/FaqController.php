<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\UserGuide;
use App\Models\Courses;
use App\Models\Setfile;
use App\Models\FaqCategory;
use App\Models\Faqs;
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
        $Faqs = Faqs::paginate(10);
        return view('admin.Faq',compact('Faqs'));

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

        $AllFaqCategory = FaqCategory::get();

        $view = view('admin.faq_category_render', compact('AllFaqCategory'))->render();
        return response()->json(['success' => 'Category Added successfully.','url' => $view]);
    }

    public function GetFaqCategory(Request $request)
    {

    $AllFaqCategory = array();   
    try {

        $AllFaqCategory = FaqCategory::get();
        $view = view('admin.faq_category_render', compact('AllFaqCategory'))->render();
        return response()->json(['category' => $AllFaqCategory,'url' => $view]);
    } catch (Exception $e) {
        
        return response()->json($e->getMessage(), 500);
        
    }

    }

    public function UpdateFaqCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
    
        $userGuide = FaqCategory::find($request->id);
        $userGuide->title = $request->title;
        $userGuide->save();

        $AllFaqCategory = FaqCategory::get();

        $view = view('admin.faq_category_render', compact('AllFaqCategory'))->render();
        return response()->json(['success' => 'Category Updated successfully.','url' => $view]);
    }


    public function DeleteFaqCategory(Request $request)
    {
        
        try {

            $userGuide = FaqCategory::where('id',$request->id)->delete();
            return response()->json(['success' => 'Category deleted successfully.']);
    
        } catch (Exception $e) {
        
            return response()->json(['errors' => $e->getMessage()], 500);
            
        }
    
        
    }


    public function storeFaq(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required|string|max:255',
            'answer' => 'required',
            // 'video_link' => 'url',
            'category_id' => 'required',
            
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        
        $userGuide = new Faqs();
        $userGuide->category_id = $request->category_id;
        $userGuide->question = $request->question;
        $userGuide->answer = $request->answer;
        $userGuide->video_link = $request->video_link;
    
        $userGuide->save();
    
        return response()->json(['success' => 'FAQs Added successfully.']);
    }


    public function GetFaqEdit(Request $request)
    {

    $AllFaqCategory = array();   
    try {

        $AllFaqCategory = FaqCategory::get();
        $Faq = Faqs::find($request->id);
        return response()->json(['category' => $AllFaqCategory,'Faq' => $Faq]);
    } catch (Exception $e) {
        
        return response()->json($e->getMessage(), 500);
        
    }

    }


    public function UpdateFaq(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required|string|max:255',
            'answer' => 'required',
            // 'video_link' => 'url',
            'category_id' => 'required',
            
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        
        $userGuide = Faqs::find($request->faq_edit_id);
        $userGuide->category_id = $request->category_id;
        $userGuide->question = $request->question;
        $userGuide->answer = $request->answer;
        $userGuide->video_link = $request->video_link;
    
        $userGuide->save();
    
        return response()->json(['success' => 'FAQs Updated successfully.']);
    }


    public function DeleteFaq(Request $request)
    {
        
        try {

            $userGuide = Faqs::where('id',$request->faq_delete_id)->delete();
            return response()->json(['success' => 'FAQ deleted successfully.']);
    
        } catch (Exception $e) {
        
            return response()->json(['errors' => $e->getMessage()], 500);
            
        }
    
        
    }


    public function DeleteFaqBulk(Request $request)
    {
        $selectedOptions = explode(',', $request->input('faq_delete_bulk'));
        
        try {

            $userGuide = Faqs::whereIn('id',$selectedOptions)->delete();
            return response()->json(['success' => 'Faqs deleted successfully.']);
    
        } catch (Exception $e) {
        
            return response()->json(['errors' => $e->getMessage()], 500);
            
        }
    
        
    }

}





