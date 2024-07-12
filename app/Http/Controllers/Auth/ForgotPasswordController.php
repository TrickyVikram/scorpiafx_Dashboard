<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    use SendsPasswordResetEmails;
    protected function sendResetLinkResponse(Request $request, $response)
    {
        return redirect()->route('login')->with('status', trans($response));
        
    }
}