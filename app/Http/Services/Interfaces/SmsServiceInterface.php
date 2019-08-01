<?php


namespace App\Http\Services\Interfaces;

interface SmsServiceInterface
{
    public function sendSms(array $data): bool;
}