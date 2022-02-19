<?php

namespace App\Policies;

use App\Models\Station;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Support\Facades\Auth;

class StationPolicy
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'show_station')
                ->count() > 0;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Station  $station
     * @return bool
     */
    public function view(User $user, Station $station) : bool
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'show_station')
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
                ->where('permissions.name', '=', 'create_station')
                ->count() > 0;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Station  $station
     * @return bool
     */
    public function update(User $user, Station $station)
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'edit_station')
                ->count() > 0;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Station  $station
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Station $station)
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'delete_station')
                ->count() > 0;
    }
}
