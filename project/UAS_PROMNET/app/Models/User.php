<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'user_id';
    protected $table = 'users';

    protected $fillable = [
        'nim',
        'nama',
        'email',
        'password',
        'foto_profil',
        'ktm',
        'role',
    ];

    protected $hidden = [
        'password',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function requests()
    {
        return $this->hasMany(Request::class, 'user_id', 'user_id');
    }

    public function coachClients()
    {
        return $this->hasMany(CoachClient::class, 'user_id', 'user_id');
    }

    public function gymVisits()
    {
        return $this->hasMany(GymVisit::class, 'user_id', 'user_id');
    }

    public function isMahasiswa()
    {
        return $this->role === 'mahasiswa';
    }

    public function isUmum()
    {
        return $this->role === 'umum';
    }
}
