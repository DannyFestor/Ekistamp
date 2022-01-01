<?php

namespace App\Policies;

use App\Models\Prefecture;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PrefecturePolicy
{
    use HandlesAuthorization;

    public function before(User $user)
    {
        return $user->permissions()->where('permissions.name', '=', 'all')->count() > 0;
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Prefecture  $prefecture
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Prefecture $prefecture)
    {
        return \Auth::user()->permissions()->where('permissions.name', '=', 'show_prefecture')->count() > 0;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Prefecture  $prefecture
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Prefecture $prefecture)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Prefecture  $prefecture
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Prefecture $prefecture)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Prefecture  $prefecture
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Prefecture $prefecture)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Prefecture  $prefecture
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Prefecture $prefecture)
    {
        //
    }
}
