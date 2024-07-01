<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Institution extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    const Genders = [
        'Male' => 'پسرانه',
        'Female' => 'دخترانه',
        'Mix' => 'مختلط',
    ];

    public function State()
    {
        return $this->belongsTo(State::class, 'state_id', 'id');
    }

    public function Type()
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    public function GetGender()
    {
        return self::Genders[$this->gender];
    }
}
