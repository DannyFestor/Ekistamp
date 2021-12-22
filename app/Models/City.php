<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'prefecture_id',
        'name',
        'romaji',
        'hiragana',
        'katakana',
        'katakana_half',
    ];

    public function prefecture()
    {
        return $this->belongsTo(Prefecture::class);
    }
}
