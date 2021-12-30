<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Staudenmeir\EloquentHasManyDeep\HasManyDeep;
use Staudenmeir\EloquentHasManyDeep\HasRelationships;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, HasRelationships;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function registeredStamps() : HasMany
    {
        return $this->hasMany(Stamp::class);
    }

    public function stamps() : BelongsToMany
    {
        return $this->belongsToMany(Stamp::class);
    }

    public function roles() : BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function permissions() : HasManyDeep
    {
        return $this->hasManyDeep(Permission::class, [
            RoleUser::class,
            Role::class,
            PermissionRole::class,
        ]);
    }

    public function posts() : HasMany
    {
        return $this->hasMany(Post::class);
    }
}
