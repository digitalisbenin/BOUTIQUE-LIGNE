<?php

namespace App\Services;
use Illuminate\Support\Facades\Http;

class KkiapayService
{
    protected $publicKey;
    protected $privateKey;
    protected $secret;
    protected $sandbox;

    public function __construct()
    {
        $this->publicKey = config('kkiapay.public_key');
        $this->privateKey = config('kkiapay.private_key');
        $this->secret = config('kkiapay.secret');
        $this->sandbox = config('kkiapay.sandbox', true);
    }

    public function getPaymentUrl($transactionId, $amount, $email, $firstname, $lastname)
    {
        $baseUrl = $this->sandbox ? 'https://api-sandbox.kkiapay.me' : 'https://api.kkiapay.me';
        $response = Http::withHeaders([
            'Authorization' => "Bearer {$this->privateKey}",
            'X-Api-Key' => $this->publicKey,
            'X-SECRET-KEY' => $this->secret,
        ])->post("{$baseUrl}/api/v1/transactions", [
            'amount' => $amount * 100, // amount in cents
            'currency' => 'XOF',
            'transactionId' => $transactionId,
            'email' => $email,
            'firstname' => $firstname,
            'lastname' => $lastname,
            'sandbox' => $this->sandbox,
        ]);

        if ($response->successful()) {
            return $response->json()['payment_url'];
        }

        throw new \Exception('Could not get payment URL from Kkiapay.');
    }

    public function verifyTransaction($transactionId)
    {
        $baseUrl = $this->sandbox ? 'https://api-sandbox.kkiapay.me' : 'https://api.kkiapay.me';
        $response = Http::withHeaders([
            'Authorization' => "Bearer {$this->privateKey}",
            'X-Api-Key' => $this->publicKey,
            'X-SECRET-KEY' => $this->secret,
        ])->get("{$baseUrl}/api/v1/transactions/{$transactionId}");

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception('Could not verify transaction with Kkiapay.');
    }
}

