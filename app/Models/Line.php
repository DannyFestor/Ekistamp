<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
}
