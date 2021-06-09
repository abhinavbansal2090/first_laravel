<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subadmin;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AgentController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }

  public function index() {
    $user = Auth::user()->firstname;
    $users= DB::table('subadmin')->select('id','assets','priority','ticketStatus')->where('agent', $user)->orderBy('id')->paginate(5);
    //return $users;
    return view('agent',compact('users'));
  }

  function showData($id)
  {
     $data =Subadmin::find($id);
     return view('edit',compact('data'));
  }

  public function updateStatus(Request $request)
  {
      $agent = Subadmin::find($request->id);
      $agent->ticketStatus = $request->ticketstatus;
      $agent->save();

      //$message="Update successfully";
      return redirect('agent');
  }


}
