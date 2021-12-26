<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stamp extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'station_id',
        'company_id',
        'name',
        'name_eng',
        'description',
        'description_eng',
        'is_approved',
    ];

    public function registeredBy() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function station() : BelongsTo
    {
        return $this->belongsTo(Station::class);
    }

    public function company() : BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
