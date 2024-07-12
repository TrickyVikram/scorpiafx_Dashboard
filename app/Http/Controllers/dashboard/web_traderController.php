<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class web_traderController extends Controller
{
    public function index()
    {
      return view('content.dashboard.Dashboards-web_trader ');
    }
}