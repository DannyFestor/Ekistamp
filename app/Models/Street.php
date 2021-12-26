<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Street extends Model
{
    use HasFactory;

    protected $fillable = [
        'prefecture_id',
        'city_id',
        'postcode_id',
        'name',
        'romaji',
        'hiragana',
        'katakana',
        'katakana_half',
    ];

    public function prefecture() : BelongsTo
    {
        return $this->belongsTo(Prefecture::class);
    }

    public function city() : BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function postcode() : BelongsTo
    {
        return $this->belongsTo(Postcode::class);
    }
}
