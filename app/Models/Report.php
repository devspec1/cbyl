<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Report extends Model
{
    use HasFactory;

    /** @var string[] */
    protected $fillable = [
        'none_payment_of_rent',
        'noice',
        'damage_to_property',
        'terms_of_lease_broken',
        'anti_social_behaviour',
        'no_boiler_for_a_period_of_time',
        'damp',
        'bathroom_of_plumbing_issues',
        'kitchin_issues',
        'behavior_recorded_as_good',
        'added_by_user_id',
        'tenant_id',
    ];

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }

    public function addedBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
