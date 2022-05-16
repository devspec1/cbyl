<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'stripe' => [
        'model'  => App\Models\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'plans' => [
            [
                'amount' => 30,
                'description' => 'Up to 10 searches per year, unlimited reporting',
                'currency' => 'gbp',
                'interval' => 'year',
                'product' => 'Standard Subscription',
            ],
            [
                'amount' => 70,
                'description' => 'Unlimited searches, unlimited reporting',
                'currency' => 'gbp',
                'interval' => 'year',
                'product' => 'Agency Subscription',
            ]
        ],
        'coupons' => [
            [
                'code' => 'LAUNCH',
                'percent_off' => 50,
                'duration' => 'once',
                'name' => 'Launch'
            ],
        ]
    ],
];
