<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
Use config;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AdminController extends Controller
{
  public function index() {
    $role = config('hardcode.roles');
    //return $role;
    return view('admin',compact('role'));
  }

  public function creatRole(Request $request)
  {



      if($request->hasFile('profile_pic')){
        /*$request->validate([
                  'profile_pic' => 'mimes:jpeg,gif,png|size:20000' // Only allow .jpg, .bmp and .png file types.
              ]);*/
            $image  = $request->file('profile_pic')->store('role', 'public');
      }

      $data = $request->input();
      $password = Str::ucfirst($data['password']);

      //echo $password;

			try{
				$admin = new User;
        $admin->email = $data['username'];
        $admin->mobile = $data['mobile'];
				$admin->firstname = $data['firstname'];
				$admin->lastname = $data['lastname'];
        $admin->status = $data['status'];
        $admin->password = Hash::make($password);
        $admin->role = $data['role'];
        $admin->status = $data['status'];
        $admin->profile_pic = $image;
				$admin->save();

        $user = [
            'username' => $data['username'],
            'password' => $password
        ];

        Mail::to($user['username'])->send(new WelcomeMail($user));

        //$message = "Insert successfully";

				return redirect('home');
			}
			catch(Exception $e){
				return redirect('admin',compact("operation failed"));
			}

  }


}
