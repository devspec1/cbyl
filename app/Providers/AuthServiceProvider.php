<?php

namespace App\Providers;

use App\Models\Plan;
use App\Models\SearchLog;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('search-tenant', function (User $user) {
            $plans = Plan::all()->pluck('slug', 'stripe_plan');
            $subscription = $user->getActiveSubscription();
            if (!($activePlan = $plans->get($subscription->stripe_price))) {
                return false;
            }
            
            if ($activePlan == 'agency subscription') {
                return true;
            }

            $searchCount = SearchLog::whereBetween(
                'created_at', [$subscription->created_at, $subscription->ends_at ?? $subscription->created_at->addYear(1)->format('Y-m-d')]
            )
            ->count(DB::raw('DISTINCT name, date_of_birth, postcode'));

            if ($searchCount < 10) {
                return true;
            }

            return false;
        });
    }
}
