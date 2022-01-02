<?php

namespace App\Policies;

use App\Models\City;
use App\Models\User;
use Auth;
use Illuminate\Auth\Access\HandlesAuthorization;

class CityPolicy
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
     * @return bool
     */
    public function viewAny(User $user) : bool
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'show_city')
                ->count() > 0;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\City  $city
     * @return bool
     */
    public function view(User $user, City $city) : bool
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'show_city')
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
                ->where('permissions.name', '=', 'create_city')
                ->count() > 0;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\City  $city
     * @return bool
     */
    public function update(User $user, City $city)
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'edit_city')
                ->count() > 0;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\City  $city
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, City $city)
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'delete_city')
                ->count() > 0;
    }
}
