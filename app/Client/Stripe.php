<?php

namespace App\Client;

use App\Models\Plan;
use Exception;
use Stripe\StripeClient;

class Stripe
{
    protected string $secret;
    
    protected string $key;

    protected $client;

    public function __construct()
    {
        $this->setCredentials(config('services.stripe.secret') ?: '', config('services.stripe.key') ?: '');

        $this->initializeClient();
    }

    public function setCredentials(string $secret, string $key)
    {
        $this->secret = $secret;
        $this->key = $key;
    }

    public function initializeClient()
    {
        if (!$this->secret || !$this->key) {
            throw new Exception('Please provide stripe secret and key.');
        }

        $this->client = new StripeClient($this->secret);
    }

    public function createPlan(array $plan, string $productId)
    {
        $price = $plan['amount'] * 100; 

        return $this->client->plans->create([
            'amount' => $price,
            'currency' => $plan['currency'],
            'interval' => $plan['interval'], //  it can be day,week,month or year
            'product' => $productId,
        ]);
    }

    public function createProduct(string $name)
    {
        return $this->client->products->create(['name' => $name]);
    }

    public function getPlans()
    {
        return $this->client->plans->all(['limit' => 2]);   
    }

    public function createPaymentMethod(string $token)
    {
        $tokenObject = $this->client->tokens->retrieve(
            $token,
            []
        );
    }

    public function createCoupon(array $coupon)
    {
        return $this->client->coupons->create($coupon);
    }
}
