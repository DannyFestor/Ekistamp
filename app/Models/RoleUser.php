<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class RoleUser extends Pivot
{
    public $incrementing = false;
    public $timestamps = false;
    protected $table = 'role_user';
    protected $fillable = [
        'role_id',
        'user_id',
    ];

    public function role() : BelongsTo
    {
        return $this->belongsTo(Role::class);
    }

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
