<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Xendit\Xendit;

class XenditController extends Controller
{
    private $token = 'xnd_development_zJ7geXthOPJOioCRfE5mQ9FmzD4F6cVI8tkXI24HeWjzHU8UQ4Bf4WssV9AmSPB';
    public function welcome(Request $request)
    {
        Xendit::setApiKey($this->token);
        $external_id = 'va-' . time();
        $params = [
            'external_id' => $external_id,
            'bank_code' => $request->bank,
            'name' => $request->email,
            'expected_amount' => $request->price,
            'is_closed' => true,
            'expiration_date' => Carbon::now()->addDays(1)->toISOString(),
            'is_single_use' => true,
        ];



        $createVa = \Xendit\VirtualAccounts::create($params);

        Payment::create([
            'external_id' => $external_id,
            'payment_channel' => 'Virtual Account',
            'email' => $request->email,
            'price' => $request->price,
            'owner_id' => $createVa['owner_id'],
            'account_number' => $createVa['account_number'],
            'status' => $createVa['status'],
            'bank_code' => $createVa['bank_code'],
        ]);
        $bayar = Payment::all();
        return view('bayar', compact('bayar'));
    }

    public function bayar()
    {
        $bayar = Payment::all();
        return view('bayar', compact('bayar'));
    }

    public function invoice(Request $request)
    {
        $external_id = 'va-' . time();
        Xendit::setApiKey($this->token);
        $params = [
            'external_id' => 'demo_1475801962607',
            'amount' => 50000,
            'description' => 'Invoice Demo #123',
            'invoice_duration' => 86400,
            'customer' => [
                'given_names' => 'John',
                'surname' => 'Doe',
                'email' => 'johndoe@example.com',
                'mobile_number' => '+6287774441111',
                'addresses' => [
                    [
                        'city' => 'Jakarta Selatan',
                        'country' => 'Indonesia',
                        'postal_code' => '12345',
                        'state' => 'Daerah Khusus Ibukota Jakarta',
                        'street_line1' => 'Jalan Makan',
                        'street_line2' => 'Kecamatan Kebayoran Baru'
                    ]
                ]
            ],
            'customer_notification_preference' => [
                'invoice_created' => [
                    'whatsapp',
                    'sms',
                    'email'
                ],
                'invoice_reminder' => [
                    'whatsapp',
                    'sms',
                    'email'
                ],
                'invoice_paid' => [
                    'whatsapp',
                    'sms',
                    'email'
                ],
                'invoice_expired' => [
                    'whatsapp',
                    'sms',
                    'email'
                ]
            ],
            'success_redirect_url' => 'https=>//www.google.com',
            'failure_redirect_url' => 'https=>//www.google.com',
            'currency' => 'IDR',
            'items' => [
                [
                    'name' => 'Air Conditioner',
                    'quantity' => 1,
                    'price' => 100000,
                    'category' => 'Electronic',
                    'url' => 'https=>//yourcompany.com/example_item'
                ]
            ],
            'fees' => [
                [
                    'type' => 'ADMIN',
                    'value' => 5000
                ]
            ]
        ];

        $createInvoice = \Xendit\Invoice::create($params);



        Payment::create([
            'external_id' => $external_id,
            'payment_channel' => 'Virtual Account',
            'email' => $createInvoice['currency'],
            'price' => $createInvoice['amount'],
            'owner_id' => $createInvoice['invoice_url'],
            'account_number' => $createInvoice['success_redirect_url'],
            'status' => $createInvoice['description'],
            'bank_code' => $createInvoice['external_id'],
        ]);
        $bayar = Payment::all();
        return $createInvoice['invoice_url'];
    }
}
