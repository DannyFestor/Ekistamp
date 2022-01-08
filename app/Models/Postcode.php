<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Postcode extends Model
{
    use HasFactory;

    protected $table = 'postcodes';

    protected $fillable = [
        'prefecture_id',
        'city_id',
        'postcode',
        'postcode_prefix',
    ];

    public function prefecture() : BelongsTo
    {
        return $this->belongsTo(Prefecture::class);
    }

    public function city() : BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function streets() : HasMany
    {
        return $this->hasMany(Street::class);
    }
}
