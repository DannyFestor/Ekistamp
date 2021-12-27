<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Staudenmeir\EloquentHasManyDeep\HasManyDeep;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class Permission extends Model
{
    use HasFactory, HasRelationships;

    protected $fillable = [
        'name',
        'description',
    ];

    public function roles() : BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function users() : HasManyDeep
    {
        return $this->hasManyDeep(User::class, [
            PermissionRole::class,
            Role::class,
            RoleUser::class,
        ]);
    }
}
