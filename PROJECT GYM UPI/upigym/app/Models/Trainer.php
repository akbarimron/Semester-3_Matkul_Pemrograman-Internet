<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Trainer extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'bio',
        'specializations',
        'photo',
        'experience_years',
        'is_active'
    ];

    protected $casts = [
        'specializations' => 'array',
        'is_active' => 'boolean',
        'experience_years' => 'integer'
    ];

    /**
     * Get all classes for this trainer
     */
    public function classes(): HasMany
    {
        return $this->hasMany(GymClass::class);
    }

    /**
     * Scope to get only active trainers
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Get trainer's full name with experience
     */
    public function getFullTitleAttribute()
    {
        return $this->name . ' (' . $this->experience_years . ' years)';
    }
}
