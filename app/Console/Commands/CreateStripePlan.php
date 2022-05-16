<?php

namespace App\Console\Commands;

use App\Client\Stripe;
use App\Models\Coupon;
use App\Models\Plan;
use Exception;
use Illuminate\Console\Command;

class CreateStripePlan extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stripe:create-plan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a stripe plan from services.php stripe.plans';

    protected Stripe $client;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Stripe $client)
    {
        parent::__construct();

        $this->client = $client;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            $this->info('Setting up stripes accounts');

            $plans = config('services.stripe.plans');

            foreach ($plans as $plan) {
                $product = $this->client->createProduct($plan['product']);

                $stripePlan = $this->client->createPlan($plan, $product->id);

                Plan::create([
                    'name' => $plan['product'],
                    'slug' => strtolower($plan['product']),
                    'stripe_plan' => $stripePlan->id,
                    'cost' => $plan['amount'], //  it can be day,week,month or year
                    'description' => $plan['description'],
                ]);
            }

            $this->info('plans successfully created.');

            $coupons = config('services.stripe.coupons');

            foreach ($coupons as $coupon) {
                $this->client->createCoupon([
                    'id' => $coupon['code'],
                    'percent_off' => $coupon['percent_off'],
                    'duration' => $coupon['duration'],
                    'name' => $coupon['name']
                ]);

                if (!Coupon::where('code', $coupon['code'])->first()) {
                    Coupon::create($coupon);
                }
            }

            $this->info('Coupons successfully created.');
    
            return 0;  
        } catch (Exception $e) {
            $this->info('Error: ' . $e->getMessage());
        }
        
    }
}
