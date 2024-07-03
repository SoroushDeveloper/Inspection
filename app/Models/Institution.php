<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    public function State(): BelongsTo
    {
        return $this->belongsTo(State::class, 'state_id', 'id');
    }

    public function Type(): BelongsTo
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    public function GetGender(): string
    {
        return self::Genders[$this->gender];
    }
}
