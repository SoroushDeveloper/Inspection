<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inspection extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function Institution(): BelongsTo
    {
        return $this->belongsTo(Institution::class, 'institution_id', 'id');
    }

    public function Subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

    public function Major(): BelongsTo
    {
        return $this->belongsTo(Major::class, 'major_id', 'id');
    }

    public function Consistency(): BelongsTo
    {
        return $this->belongsTo(Consistency::class, 'consistency_id', 'id');
    }

    public function Advantages(): string
    {
        $advantages = '';
        foreach (json_decode($this->advantages) as $key => $advantage) {
            $advantages .= Common::query()->find($advantage)->title;
            if (count(json_decode($this->disadvantages)) - 1 != $key) {
                $advantages .= ' . ';
            }
        }
        return $advantages;
    }

    public function Disadvantages(): string
    {
        $disadvantages = '';
        foreach (json_decode($this->disadvantages) as $key => $disadvantage) {
            $disadvantages .= Common::query()->find($disadvantage)->title;
            if (count(json_decode($this->disadvantages)) - 1 != $key) {
                $disadvantages .= ' . ';
            }
        }
        return $disadvantages;
    }
}
