<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User_ip;

class Analytics extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index(Request $request)
  {

    $user_ips = User_ip::all();


      $client_ip = $request->ip();



    return view('content.dashboard.dashboards-analytics', compact('user_ips', 'client_ip'));
  }
}