<?php

namespace App\Services;

use App\Client\Stripe;
use App\Models\Plan;
use App\Models\User;

class SubscriptionService
{
    protected string $secret;
    
    protected string $key;

    protected Stripe $stripe;

    public function __construct(Stripe $stripe)
    {
        $this->stripe = $stripe;
    }

    public function subscribe(User $user, Plan $plan, string $paymentMethod)
    {
        $user->createOrGetStripeCustomer();
        
        $user->updateDefaultPaymentMethod($paymentMethod);

        $user->newSubscription('default', $plan->stripe_plan)->create($paymentMethod, ['email' => $user->email]);
    }

    public function getPlans()
    {
        return $this->stripe->getPLans();
    }
}
