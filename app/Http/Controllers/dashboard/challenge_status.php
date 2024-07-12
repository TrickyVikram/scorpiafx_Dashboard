<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class challenge_status extends Controller
{
    public function index()
    {
      return view('content.dashboard.Dashboards-challenge ');
    }
}