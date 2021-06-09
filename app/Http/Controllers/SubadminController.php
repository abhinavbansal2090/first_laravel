<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subadmin;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SubadminController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }

  public function index() {
    $users= DB::table('users')->select('firstname','mobile')->where('role', 'User')->get();

    return view('subadmin',compact('users'));
  }

  public function creatTicket(Request $request)
  {
      $data = $request->input();
			try{
				$Subadmin = new Subadmin;
        $Subadmin->user = $data['user'];
        $Subadmin->mobile = $data['mobile'];
				$Subadmin->assets = $data['assets'];
        $Subadmin->agent = $data['agent'];
				$Subadmin->priority = $data['priority'];
        $Subadmin->serialNo = $data['serialNo'];
        $Subadmin->ModelNo = $data['modelNo'];
        $Subadmin->ticketStatus = "Pending";
				$Subadmin->save();
				return redirect('home')->with('status',"Insert successfully");
			}
			catch(Exception $e){
				return redirect('subadmin')->with('failed',"operation failed");
			}

  }

  function showData()
  {
     //$data =Subadmin::find($id);
     return view('user');
  }

  public function creatUser(Request $request)
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
				return redirect('user',compact("operation failed"));
			}

  }

  function showReport()
  {
     return view('report');
  }

  /*public function getRecord(Request $request)
  {

      return view('report');

  }*/


}
