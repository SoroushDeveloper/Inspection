<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $guarded = [];

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
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function setPasswordAttribute($password): void
    {
        $this->attributes['password'] = bcrypt($password);
    }

    const Types = [
        'Admin' => 'مدیر',
        'Inspector' => 'بازرس',
    ];

    public function FullName(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getType(): string
    {
        return self::Types[$this->user_type];
    }

    public function isAdmin(): bool
    {
        return $this->user_type == 'Admin';
    }

    public function isInspector(): bool
    {
        return $this->user_type == 'Inspector';
    }
}
