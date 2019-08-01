<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendSmsRequest;
use App\Http\Services\Interfaces\SmsServiceInterface;

class SmsController extends Controller
{
    /** @var SmsServiceInterface  */
    protected $smsService;

    public function __construct(SmsServiceInterface $smsService)
    {
        $this->smsService = $smsService;
    }

    public function send(SendSmsRequest $request)
    {
        return view('erondondone', ['satatus' => $this->smsService->sendSms($request->all())]);
    }
}
