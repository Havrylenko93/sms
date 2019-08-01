<?php


namespace App\Http\Services;

use App\Http\Services\Interfaces\SmsServiceInterface;
use Nexmo\Client;

class SmsService implements SmsServiceInterface
{
    protected $nexmoClient;

    public function __construct(Client $nexmoClient)
    {
        $this->nexmoClient = $nexmoClient;
    }

    public function sendSms(array $data): bool
    {
        $this->nexmoClient->message()->send([
            'to' => $data['recipient_number'],
            'from' => $data['recipient_number'],
            'text' => $data['body'],
            'type' => 'unicode'
        ]);

        return false;
    }
}