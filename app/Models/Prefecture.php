<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prefecture extends Model
{
    protected $fillable = [
        'name',
        'romaji',
        'hiragana',
        'katakana',
        'katakana_half',
    ];

    public function cities() : HasMany
    {
        return $this->hasMany(City::class);
    }

    public function lines() : HasMany
    {
        return $this->hasMany(Line::class);
    }

    public function postcodes() : HasMany
    {
        return $this->hasMany(Postcode::class);
    }

    public function street() : HasMany
    {
        return $this->hasMany(Street::class);
    }
}
