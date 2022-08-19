<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Xendit\Xendit;

class HomeController extends Controller
{
    public function welcome()
    {
        Xendit::setApiKey('xnd_development_zJ7geXthOPJOioCRfE5mQ9FmzD4F6cVI8tkXI24HeWjzHU8UQ4Bf4WssV9AmSPB');
        $getPaymentChannels = \Xendit\PaymentChannels::list();
        $VirtualAccounts = \Xendit\VirtualAccounts::getVABanks();
        return view('welcome', compact('getPaymentChannels',  'VirtualAccounts'));
    }

    public function balance()
    {
        Xendit::setApiKey('xnd_development_zJ7geXthOPJOioCRfE5mQ9FmzD4F6cVI8tkXI24HeWjzHU8UQ4Bf4WssV9AmSPB');
        $getBalance
            = \Xendit\VirtualAccounts::getVABanks();
        dd($getBalance);
    }

    public function store(Request $request)
    {









        return response()->json([
            'message' => 'Berhasil di proses',
        ])->setStatusCode(200);
    }
}
