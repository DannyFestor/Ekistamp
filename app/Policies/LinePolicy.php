<?php

namespace App\Policies;

use App\Models\Line;
use App\Models\User;
use Auth;
use Illuminate\Auth\Access\HandlesAuthorization;

class LinePolicy
{
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
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function viewAny(User $user) : bool
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'show_line')
                ->count() > 0;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Line  $line
     * @return bool
     */
    public function view(User $user, Line $line) : bool
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'show_line')
                ->count() > 0;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return bool
     */
    public function create(User $user) : bool
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'create_line')
                ->count() > 0;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Line  $line
     * @return bool
     */
    public function update(User $user, Line $line)
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'edit_line')
                ->count() > 0;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Line  $line
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Line $line)
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'delete_line')
                ->count() > 0;
    }
}
