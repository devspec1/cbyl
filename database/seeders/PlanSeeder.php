<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Standard Subscription',
                'slug' => 'standard subscription',
                'stripe_plan' => 'plan_LVvZwzRHg00Kws',
                'cost' => 30.00,
                'description' => 'Up to 10 searches per year, unlimited reporting',
            ],
            [
                'name' => 'Agency Subscription',
                'slug' => 'agency subscription',
                'stripe_plan' => 'plan_LVvZFT0OoontMW',
                'cost' => 70.00,
                'description' => 'Unlimited searches, unlimited reporting',
            ]
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
