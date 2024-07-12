<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\UserGuide;
use App\Models\Courses;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Facades\Http;


class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function Dashboard()
    {
        $userguide = UserGuide::paginate(10);
        return view('admin.user-guide',compact('userguide'));

    }

    public function Courses()
    {
        $Courses = Courses::paginate(10);
        return view('admin.courses',compact('Courses'));


    }

    public function Inputs()
    {
    
        return view('admin.inputs');

    }

    

   

    public function Accounts()
    {
    
        return view('admin.accounts');

    }


    public function storeUserGuide(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'video_link' => 'required|url',
            'file' => 'required|mimes:pdf,csv,xlsx|max:2048',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
    
        
        $userGuide = new UserGuide();
        $userGuide->title = $request->title;
        $userGuide->video_link = $request->video_link;
        $userGuide->file_name = $fileName;
        $userGuide->file_type = $this->sendimagetodirectory($request->file('file'));;
        $userGuide->save();
    
        return response()->json(['success' => 'User Guide uploaded successfully.']);
    }

    

    public function DeleteUserGuide(Request $request)
    {
        
        try {

            $userGuide = UserGuide::where('id',$request->user_delete_id)->delete();
            return response()->json(['success' => 'User Guide deleted successfully.']);
    
        } catch (Exception $e) {
        
            return response()->json(['errors' => $e->getMessage()], 500);
            
        }
    
        
    }

    public function UpdateUserGuide(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'video_link' => 'required|url',
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
    
        
        $userGuide = UserGuide::find($request->edit_id);
        $userGuide->title = $request->title;
        $userGuide->video_link = $request->video_link;
        $userGuide->file_name = $fileName;
        if($request->has('file'))
        {
        $userGuide->file_type = $this->sendimagetodirectory($request->file('file'));
        }
        $userGuide->save();
    
        return response()->json(['success' => 'User Guide Updated successfully.']);
    }


    public function DeleteUserGuideBulk(Request $request)
    {
        $selectedOptions = explode(',', $request->input('guide_delete_bulk'));
        
        try {

            $userGuide = UserGuide::whereIn('id',$selectedOptions)->delete();
            return response()->json(['success' => 'User Guide deleted successfully.']);
    
        } catch (Exception $e) {
        
            return response()->json(['errors' => $e->getMessage()], 500);
            
        }
    
        
    }

    public function storeCourses(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'video_link' => 'required|url',
            'file' => 'required|mimes:pdf,csv,xlsx|max:2048',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
    
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();
    
        
        $userGuide = new Courses();
        $userGuide->title = $request->title;
        $userGuide->video_link = $request->video_link;
        $userGuide->file_name = $fileName;
        $userGuide->file_type = $this->sendimagetodirectory($request->file('file'));;
        $userGuide->save();
    
        return response()->json(['success' => 'Courses Uploaded successfully.']);
    }

    public function UpdateCourse(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'video_link' => 'required|url',
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
    
        
        $userGuide = Courses::find($request->edit_id);
        $userGuide->title = $request->title;
        $userGuide->video_link = $request->video_link;
        $userGuide->file_name = $fileName;
        if($request->has('file'))
        {
        $userGuide->file_type = $this->sendimagetodirectory($request->file('file'));
        }
        $userGuide->save();
    
        return response()->json(['success' => 'Course Updated successfully.']);
    }

    public function DeleteCourse(Request $request)
    {
        
        try {

            $userGuide = Courses::where('id',$request->user_delete_id)->delete();
            return response()->json(['success' => 'Course deleted successfully.']);
    
        } catch (Exception $e) {
        
            return response()->json(['errors' => $e->getMessage()], 500);
            
        }
    
        
    }

    public function DeleteBulkCourse(Request $request)
    {
        $selectedOptions = explode(',', $request->input('course_delete_bulk'));
        
        try {

            $userGuide = Courses::whereIn('id',$selectedOptions)->delete();
            return response()->json(['success' => 'Course deleted successfully.']);
    
        } catch (Exception $e) {
        
            return response()->json(['errors' => $e->getMessage()], 500);
            
        }
    
        
    }

    public function DownloadFile($file_name) 
     {

    $file_path = public_path('assets/user_guides/'.$file_name);
    return response()->download($file_path);
    }

    public function UploadEA()
    {
        return view('admin.upload-ea');

    }



    public static function sendimagetodirectory($imagename)

    {

        $file = $imagename;

        $filename = rand() . '.' . $file->getClientOriginalExtension();

        $file->move(public_path('assets/user_guides'), $filename);

        return $filename;

    }

}
