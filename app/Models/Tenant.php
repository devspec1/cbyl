<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tenant extends Model
{
    use HasFactory;

    /** @var string[] */
    protected $fillable = ['name', 'date_of_birth'];

    public function reports(): HasMany
    {
        return $this->hasMany(Report::class);
    }
}
