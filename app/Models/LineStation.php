<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class LineStation extends Pivot
{
    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'line_station';
    protected $fillable = [
        'line_id',
        'station_id',
        'order',
    ];

    public function line() : BelongsTo
    {
        return $this->belongsTo(Line::class);
    }

    public function station() : BelongsTo
    {
        return $this->belongsTo(Station::class);
    }
}
