<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MembershipPlan extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'duration_days',
        'features',
        'is_active'
    ];

    protected $casts = [
        'features' => 'array',
        'is_active' => 'boolean',
        'price' => 'decimal:2'
    ];

    /**
     * Get all user memberships for this plan
     */
    public function userMemberships(): HasMany
    {
        return $this->hasMany(UserMembership::class);
    }

    /**
     * Get all users who have this membership plan
     */
    public function users()
    {
        return $this->hasManyThrough(User::class, UserMembership::class);
    }

    /**
     * Scope to get only active plans
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
