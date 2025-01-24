<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Userdata;
use App\Models\Allfolder;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function filelist()
    {
        $userdata = Userdata::where('status', 1)->whereNull('folderid')
            ->orderBy('id', 'desc')
            ->get();

        $allfolder = Allfolder::where('status', 1)->get();

        $totalCount = $userdata->count();

        $data = compact('userdata', 'totalCount', 'allfolder');
        return view('admin.allfiles')->with($data);
        //    return view('admin.allfiles');
    }




    //View Form
    public function uploadviewform(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,png,svg,pdf,xlsx,xls,doc,docx|max:30720',
        ]);

        date_default_timezone_set('Asia/Kolkata');

        $foldername = $request->foldername;
        $folderPath = public_path('uploads/files/' . $foldername);
        if (!File::exists($folderPath)) {
            File::makeDirectory($folderPath, 0755, true);
        }

        $fileTitle = pathinfo($request->file->getClientOriginalName(), PATHINFO_FILENAME);
        $imageName = $fileTitle . '-' . time() . '.' . $request->file->extension();

        $request->file->move($folderPath, $imageName);
        // $request->file->move(public_path('uploads/files/.$foldername'), $imageName);


        $data =  new Userdata;
        $data->file = $imageName;

        if (empty($request->file_title)) {
            $data->file_title   = $fileTitle;
        } else {
            $data->file_title   = $request->file_title;
        }

        $data->name = $request->name;

        $data->folderid = $request->folderid;
        $data->foldername = $request->foldername;

        $data->userphone = $request->userphone;
        $data->upload_date   = $request->upload_date;
        $data->upload_time   = $request->upload_time;
        $data->status   = '1';
        $data->created_at   = now();

        $data->save();
        return back()->with('Uploded', 'File Upload Successfully!');
        // return view('admin.upld');  
    }


    //DELETE
    public function  remove($id)
    {
        $filedelete = Userdata::where('id', $id)->first();
        date_default_timezone_set('Asia/Kolkata');
        if ($filedelete) {
            $filedelete->delete();
            // $filedelete->status = 'delete';
            // $filedelete->updated_at = now();
            // $filedelete->save();
            //  return back()->with('deleted','This File Deleted Successfully!');
            return redirect('allfiles')->with('deleted', 'This File Deleted Successfully!');
        }
    }


    //IFRAME
    //Download
    public function iframeFile($foldername, $file)
    {


        // Ensure the user is authenticated
        if (!Auth::check()) {
            abort(403, 'Unauthorized access');
        }

        if ($foldername == 'Null') {
            $filePath = public_path('uploads/files/' . $file);
        } else {
            $folderPath = public_path('uploads/files/' . $foldername);
            $filePath = $folderPath . '/' . $file;
        }

        // $filePath = $folderPath . '/' . $file;


        // Check if the file exists
        if (!file_exists($filePath)) {
            abort(404, 'File not found');
        }

        // Display the file in the browser
        return response()->file($filePath);
    }









    //    Create Folder
    public function folder(Request $request)
    {
        $request->validate([
            'foldername' => 'required',
        ]);

        date_default_timezone_set('Asia/Kolkata');

        $data =  new Allfolder;

        $data->foldername = $request->foldername;
        $data->status   = '1';
        $data->created_at   = now();

        $data->save();

        // Create the folder in the filesystem
        $folderPath = public_path('uploads/files/' . $request->foldername);
        if (!File::exists($folderPath)) {
            File::makeDirectory($folderPath, 0755, true);
        }

        return back()->with('MakeFolder', 'Create Folder Successfully!');
    }



    //Folder Wise File View
    public function folderwisefile($id, $fn)
    {
        //    dd($fn);
        $userdata = Userdata::where('folderid', $id)->orderBy('id', 'desc')->get();

        $data = compact('userdata', 'fn', 'id');
        return view('admin.folderwisefile')->with($data);
        //   return view('admin.folderwisefile');
    }






    //DELETE Folder
    public function  deletefolder($id)
    {
  
     $allFolderData = Allfolder::where('id', $id)->first();
     if ($allFolderData) {
         $userData = Userdata::where('folderid', $id)->get();

        foreach ($userData as $data) {
             $folderPath = public_path('uploads/files/' . $data->foldername); // Adjust based on your structure
 
            if (File::exists($folderPath)) {
                File::deleteDirectory($folderPath);
            }

            // Delete the Userdata File record
            $data->delete();
        }

        // Delete the record from Allfolder table
        $allFolderData->delete();

        return back()->with('deleted', 'The folder and its contents were deleted successfully!');
    }

    return back()->with('error', 'Folder not found!');
    }


    //Rename Folder
    public function renamefolder($id){
        $rename= Allfolder::where('id', $id)->get();
         return response()->json($rename);
       }

       //Change Folder Name
    //    public function changefolder(Request $request){
    //      $request->validate([
    //          'foldername' => 'required', // Add more validation rules to the password
    //     ]);
    //      date_default_timezone_set('Asia/Kolkata'); 
    //       $rename = Allfolder::where('id', $request->id)->first();
    //       $rename->foldername = $request->foldername;
    //      $rename->updated_at = now();
    //      $rename->save(); 
    //      return back()->with('rename', 'Rename Folder Successfully!');
    //   }

    public function changefolder(Request $request)
{
    // Validate the request
    $request->validate([
        'foldername' => 'required|string|max:255', // Validate folder name
    ]);

    // Fetch the folder record
    $allFolderData = Allfolder::findOrFail($request->id);

    // Get the related Userdata records
    $userData = Userdata::where('folderid', $request->id)->get();

    // Define the old and new folder paths
    $oldFolderPath = public_path('uploads/files/' . $allFolderData->foldername);
    $newFolderPath = public_path('uploads/files/' . $request->foldername);

    // Check if the old folder exists
    if (!File::exists($oldFolderPath)) {
        return back()->with('error', 'The folder does not exist.');
    }

    // Check if a folder with the new name already exists
    if (File::exists($newFolderPath)) {
        return back()->with('error', 'A folder with the new name already exists.');
    }

    // Rename the folder in the filesystem
    File::move($oldFolderPath, $newFolderPath);

    // Update Userdata records to reflect the new folder name
    foreach ($userData as $data) {
        $data->foldername = $request->foldername; // Update folder name for related records
        $data->save();
    }

    // Update the Allfolder record
    $allFolderData->foldername = $request->foldername;
    $allFolderData->updated_at = now();
    $allFolderData->save();

    // Return success message
    return back()->with('success', 'The folder and its related data were renamed successfully!');
}

}
