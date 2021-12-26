<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function lines() : HasMany
    {
        return $this->hasMany(Line::class);
    }

    public function stamps() : HasMany
    {
        return $this->hasMany(Stamp::class);
    }
}
