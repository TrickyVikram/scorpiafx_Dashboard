<?php

namespace App\Http\Controllers\payment;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function makePayment(Request $request)
    {
        $url = 'https://api.oxapay.com/merchants/request';

        $data = [
            // 'merchant' => env('MERCHANT_API_KEY'),
            // 'lifeTime' => $request->input('lifeTime'),
            // 'feePaidByPayer' => $request->input('feePaidByPayer'),
            // 'underPaidCover' => $request->input('underPaidCover'),
            // 'callbackUrl' => $request->input('callbackUrl'),
            // 'returnUrl' => $request->input('returnUrl'),

            'amount' => $request->input('amount'),
            'currency' => $request->input('currency'),
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'orderId' => $request->input('orderId'),
            'description' => $request->input('description'),
          
        ];

     

        // $response = Http::post($url, $data);
        // $result = $response->json();
        // return view('payment.response', ['result' => $result]);


        $response = Http::post($url, $data);
        $result = json_encode($data);

        return view('payment.response', compact('result'));

        
    }
    
}