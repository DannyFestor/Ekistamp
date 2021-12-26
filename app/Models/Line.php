<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Line extends Model
{
    use HasFactory;

    protected $fillable = [
        'prefecture_id',
        'company_id',
        'name',
    ];

    public function prefecture() : BelongsTo
    {
        return $this->belongsTo(Prefecture::class);
    }

    public function company() : BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function stations() : BelongsToMany
    {
        return $this->belongsToMany(Station::class)->withPivot('order');
    }

    public function lineStations() : HasMany
    {
        return $this->hasMany(LineStation::class);
    }
}
