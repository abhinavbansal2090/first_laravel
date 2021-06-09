<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subadmin;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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


}
