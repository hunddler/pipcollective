<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\UserGuide;
use App\Models\Courses;
use App\Models\Setfile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Facades\Http;

class SetFileController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function Setfiles()
    {
        $Setfile = Setfile::paginate(10);
        return view('admin.setfiles',compact('Setfile'));

    }

 

    public function storeSetFile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'file' => 'required|mimes:pdf,csv,xlsx|max:2048',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
    
        
        $userGuide = new Setfile();
        $userGuide->title = $request->title;
        $userGuide->file_name = $fileName;
        $userGuide->file_type = $this->sendimagetodirectory($request->file('file'));;
        $userGuide->save();
    
        return response()->json(['success' => 'SetFile uploaded successfully.']);
    }

    public function UpdateSetfile(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'file' => 'mimes:pdf,csv,xlsx|max:2048',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        if($request->has('file'))
        {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
        }else
        {
            $file = '';
            $fileName = $request->fileInput_edit_name; 
        }
    
        
        $userGuide = Setfile::find($request->edit_id);
        $userGuide->title = $request->title;
        $userGuide->file_name = $fileName;
        if($request->has('file'))
        {
        $userGuide->file_type = $this->sendimagetodirectory($request->file('file'));
        }
        $userGuide->save();
    
        return response()->json(['success' => 'Setfile Updated successfully.']);
    }


    public function DeleteSetfile(Request $request)
    {
        
        try {

            $userGuide = Setfile::where('id',$request->user_delete_id)->delete();
            return response()->json(['success' => 'Setfile deleted successfully.']);
    
        } catch (Exception $e) {
        
            return response()->json(['errors' => $e->getMessage()], 500);
            
        }
    
        
    }


    public function DeleteUserSetfileBulk(Request $request)
    {
        $selectedOptions = explode(',', $request->input('setfile_delete_bulk'));
        
        try {

            $userGuide = Setfile::whereIn('id',$selectedOptions)->delete();
            return response()->json(['success' => 'Setfile deleted successfully.']);
    
        } catch (Exception $e) {
        
            return response()->json(['errors' => $e->getMessage()], 500);
            
        }
    
        
    }

    public static function sendimagetodirectory($imagename)

    {

        $file = $imagename;

        $filename = rand() . '.' . $file->getClientOriginalExtension();

        $file->move(public_path('assets/user_guides'), $filename);

        return $filename;

    }
}
