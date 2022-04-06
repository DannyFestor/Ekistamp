<?php

namespace App\Policies;

use App\Models\Stamp;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class StampPolicy
{
    use HandlesAuthorization;

    public function before(User $user) : ?bool
    {
        if ($user
                ->permissions()
                ->where('permissions.name', '=', 'all')
                ->count() > 0) {
            return true;
        }

        return null; // return false would block all functions below...
    }

    /**
     * Determine whether the user can view any models.
     *
     * @param \App\Models\User $user
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'show_stamp')
                ->count() > 0;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param \App\Models\User  $user
     * @param \App\Models\Stamp $stamp
     *
     * @return bool
     */
    public function view(User $user, Stamp $stamp) : bool
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'show_stamp')
                ->count() > 0;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param \App\Models\User $user
     *
     * @return bool
     */
    public function create(User $user) : bool
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'create_stamp')
                ->count() > 0;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param \App\Models\User  $user
     * @param \App\Models\Stamp $stamp
     *
     * @return bool
     */
    public function update(User $user, Stamp $stamp)
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'edit_stamp')
                ->count() > 0;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param \App\Models\User  $user
     * @param \App\Models\Stamp $stamp
     *
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Stamp $stamp)
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'delete_stamp')
                ->count() > 0;
    }
}
