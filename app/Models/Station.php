<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use Psy\Util\Str;

use function Symfony\Component\String\s;

class Station extends Model
{
    use HasFactory;

    protected $fillable = [
        'prefecture_id',
        'city_id',
        'street_id',
        'name',
        'hiragana',
        'katakana',
        'katakana_half',
        'romaji',
        'memo',
        'latitude',
        'altitude',
    ];

    public function prefecture() : BelongsTo
    {
        return $this->belongsTo(Prefecture::class);
    }

    public function city() : BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function street() : BelongsTo
    {
        return $this->belongsTo(Street::class);
    }
}