<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inspection extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function files()
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function User()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function Institution()
    {
        return $this->belongsTo(Institution::class, 'institution_id', 'id');
    }
}
