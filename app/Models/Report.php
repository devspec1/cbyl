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
        'description',
        'age',
        'dependants',
        'maretal_status',
        'areas_of_property',
        'none_payment_of_rent',
        'noice',
        'drugs',
        'damage_to_property',
        'other1',
        'no_boiler_for_a_period_of_time',
        'damp',
        'behavior_recorded_as_good',
        'bathroom_of_plumbing_issues',
        'kitchin_issues',
        'other2',
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
