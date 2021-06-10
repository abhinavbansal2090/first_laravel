<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
//use App\Models\Subadmin;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class HomeController extends BaseController
{
    public function index() {
      $record1 = DB::table('users')->select('role')->where('status','on')->whereDate('created_at', Carbon::today())->get();
      $record2 = DB::table('subadmin')->select('ticketStatus')->whereDate('created_at', Carbon::today())->get();
      //return $record;
      return view('home',compact('record1','record2'));
    }
}
