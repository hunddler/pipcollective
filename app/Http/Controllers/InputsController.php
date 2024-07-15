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
use App\Models\InputsCategory;
use App\Models\Inputs;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Facades\Http;

class InputsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Inputs()
    {
        $Inputs = Inputs::get();
        return view('admin.inputs',compact('Inputs'));

    }

    public function storeInputsCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
             'video_link' => 'required|url',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
    
        $userGuide = new InputsCategory();
        $userGuide->title = $request->title;
        $userGuide->video_link = $request->video_link;
        $userGuide->save();

        $AllInputsCategory = InputsCategory::get();

        $view = view('admin.inputs_category_render', compact('AllInputsCategory'))->render();
        return response()->json(['success' => 'Category Added successfully.','url' => $view]);
    }

    public function GetInputsCategory(Request $request)
    {

    $AllInputsCategory = array();   
    try {

        $AllInputsCategory = InputsCategory::get();
        $view = view('admin.inputs_category_render', compact('AllInputsCategory'))->render();
        return response()->json(['category' => $AllInputsCategory,'url' => $view]);
    } catch (Exception $e) {
        
        return response()->json($e->getMessage(), 500);
        
    }

    }


    public function DeleteInputsCategory(Request $request)
    {
        
        try {

            $userGuide = InputsCategory::where('id',$request->id)->delete();
            return response()->json(['success' => 'Category deleted successfully.']);
    
        } catch (Exception $e) {
        
            return response()->json(['errors' => $e->getMessage()], 500);
            
        }
    
        
    }

        public function UpdateInputsCategory(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
            ]);
        
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
        
        
            $userGuide = InputsCategory::find($request->id);
            $userGuide->title = $request->title;
            $userGuide->save();

            $AllInputsCategory = InputsCategory::get();

            $view = view('admin.inputs_category_render', compact('AllInputsCategory'))->render();
            return response()->json(['success' => 'Category Updated successfully.','url' => $view]);
        }


        public function storeInputs(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required|string|max:255',
            'answer' => 'required',
            'video_url' => 'nullable|url',
            'category_id' => 'required',
            
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        
        $userGuide = new Inputs();
        $userGuide->category_id = $request->category_id;
        $userGuide->question = $request->question;
        $userGuide->answer = $request->answer;
        $userGuide->video_url = $request->video_url;
    
        $userGuide->save();
    
        return response()->json(['success' => 'Inputs Added successfully.']);
    }

        public function GetInputsEdit(Request $request)
        {

        $AllFaqCategory = array();   
        try {

            $AllFaqCategory = InputsCategory::get();
            $Faq = Inputs::find($request->id);
            return response()->json(['category' => $AllFaqCategory,'Faq' => $Faq]);
        } catch (Exception $e) {
            
            return response()->json($e->getMessage(), 500);
            
        }

        }

        public function UpdateInputs(Request $request)
        {
            $validator = Validator::make($request->all(), [
                'question' => 'required|string|max:255',
                'answer' => 'required',
                'video_url' => 'nullable|url',
                'category_id' => 'required',
                
            ]);
        
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 422);
            }
        
            
            $userGuide = Inputs::find($request->input_edit_id);
            $userGuide->category_id = $request->category_id;
            $userGuide->question = $request->question;
            $userGuide->answer = $request->answer;
            $userGuide->video_url = $request->video_url;
        
            $userGuide->save();
        
            return response()->json(['success' => 'Inputs Updated successfully.']);
        }


        public function DeleteInputs(Request $request)
        {
            
            try {
    
                $userGuide = Inputs::where('id',$request->input_delete_id)->delete();
                return response()->json(['success' => 'Inputs deleted successfully.']);
        
            } catch (Exception $e) {
            
                return response()->json(['errors' => $e->getMessage()], 500);
                
            }
        
            
        }
        
        public function DeleteInputBulk(Request $request)
        {
            $selectedOptions = explode(',', $request->input('input_delete_bulk'));
            
            try {
    
                $userGuide = Inputs::whereIn('id',$selectedOptions)->delete();
                return response()->json(['success' => 'Inputs deleted successfully.']);
        
            } catch (Exception $e) {
            
                return response()->json(['errors' => $e->getMessage()], 500);
                
            }
        
            
        }
    
}
