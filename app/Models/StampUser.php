<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class StampUser extends Pivot
{
    public $timestamps = false;
    public $incrementing = false;
    protected $table = 'stamp_user';
    protected $fillable = [
        'stamp_id',
        'user_id',
    ];

    public function stamp() : BelongsTo
    {
        return $this->belongsTo(Stamp::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
