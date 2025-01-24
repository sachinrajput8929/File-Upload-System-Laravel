<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class AuthController extends Controller
{
      //DASHBOARD
   public function dashboard()
   {
      return view('admin.dashboard');
   }
   
   
 //REGISTER
 public function register()
 {
    return view('admin.register');
 }

 public function userregister(Request $request)
 {
    $request->validate([
       'name' => 'required',
       'email' => 'required|email|unique:users,email',
        'password' => 'required',
    ]);

    date_default_timezone_set('Asia/Kolkata');
    User::create([
       "name" => $request->name,
       "email"   => $request->email,
       'password' => bcrypt($request->password),
        "status" => '1',
       "role" => 'admin',
       "registerdate" => date('Y-m-d'),
       "created_at" => now()
    ]);
    return back()->with('success', 'User Created Successfully!');
 }



 //LOGIN
 public function userlogin(Request $request)
 {
    $request->validate([
       'identifier' => 'required',
       'password' => 'required',
    ]);

    $identifier = $request->input('identifier');
    $field = filter_var($identifier, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

    // Attempt to authenticate the user
    if (Auth::attempt([$field => $identifier, 'password' => $request->input('password')])) {
       $user = Auth::user();

       // Check if the user's status is 1
       if ($user->status == 1) {
         return redirect('allfiles')->with('userlogin', 'User Login Successfully!');
       } else {
          Auth::logout(); // Log out the user
          return back()->withErrors(['errormsg' => "Your account is not active!"]);
       }
    } else {
       return back()->withErrors(['errormsg' => "Invalid Credantials!"]);
    }
 }


   //LOGOUT
   public function logout()
   {
      Auth::logout();
      Session::flush();
      return redirect::to('/');
   }



//Download
   public function downloadFile($foldername,$file)
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

       // Serve the file for download
       return response()->download($filePath);
   }

}
