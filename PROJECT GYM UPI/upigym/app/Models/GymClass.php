<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GymClass extends Model
{
    protected $table = 'classes';

    protected $fillable = [
        'name',
        'description',
        'trainer_id',
        'start_time',
        'end_time',
        'days',
        'max_participants',
        'price',
        'difficulty_level',
        'is_active'
    ];

    protected $casts = [
        'days' => 'array',
        'start_time' => 'datetime:H:i',
        'end_time' => 'datetime:H:i',
        'price' => 'decimal:2',
        'is_active' => 'boolean',
        'max_participants' => 'integer'
    ];

    /**
     * Get the trainer that owns this class
     */
    public function trainer(): BelongsTo
    {
        return $this->belongsTo(Trainer::class);
    }

    /**
     * Get all enrollments for this class
     */
    public function enrollments(): HasMany
    {
        return $this->hasMany(ClassEnrollment::class, 'class_id');
    }

    /**
     * Get all enrolled users
     */
    public function enrolledUsers()
    {
        return $this->hasManyThrough(User::class, ClassEnrollment::class, 'class_id', 'id', 'id', 'user_id');
    }

    /**
     * Scope to get only active classes
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Get available slots for the class
     */
    public function getAvailableSlotsAttribute()
    {
        return $this->max_participants - $this->enrollments()->where('status', 'enrolled')->count();
    }

    /**
     * Check if class is full
     */
    public function getIsFullAttribute()
    {
        return $this->available_slots <= 0;
    }
}
