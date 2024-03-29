<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Billable;

    const NORMAL = 0;
    const ADMIN = 1;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'trial_ends_at' => 'datetime',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] =  bcrypt($value);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function verificationCodes()
    {
        return $this->hasMany(VerificationCode::class);
    }

    /**
     * Generate user api token base on auth_toke_key
     *
     * @return string
     */
    public function generateAPIToken($abilities = ['*']): string
    {
        return $this->createToken(config('api.auth_token_key'), $abilities)->plainTextToken;
    }

    public function verifyEmail(): User
    {
        $this->email_verified_at = now();

        $this->save();

        return $this;
    }

    public function isEmailVerified(): bool
    {
        return !!$this->email_verified_at;
    }

    public function displayYourNameOnReports($value)
    {
        $this->is_display_your_name_on_reports = $value;

        $this->save();

        return $this;
    }

    public function billingInformations()
    {
        return $this->hasMany(BillingInformation::class);
    }

    public function getActiveSubscription()
    {
        return $this->subscriptions()->active()->first();
    }
}
