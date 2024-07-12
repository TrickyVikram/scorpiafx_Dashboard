<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class payoutsController extends Controller
{
    public function index()
    {
      return view('payment.payment' );
    }
}