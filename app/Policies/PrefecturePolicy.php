<?php

namespace App\Policies;

use App\Models\Prefecture;
use App\Models\User;
use Auth;
use Illuminate\Auth\Access\HandlesAuthorization;

class PrefecturePolicy
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
     * @param User $user
     *
     * @return bool
     */
    public function viewAny(User $user) : bool
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'show_prefecture')
                ->count() > 0;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User       $user
     * @param Prefecture $prefecture
     *
     * @return bool
     */
    public function view(User $user, Prefecture $prefecture) : bool
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'show_prefecture')
                ->count() > 0;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     *
     * @return bool
     */
    public function create(User $user) : bool
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'create_prefecture')
                ->count() > 0;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User       $user
     * @param Prefecture $prefecture
     *
     * @return bool
     */
    public function update(User $user, Prefecture $prefecture) : bool
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'edit_prefecture')
                ->count() > 0;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User       $user
     * @param Prefecture $prefecture
     *
     * @return bool
     */
    public function delete(User $user, Prefecture $prefecture) : bool
    {
        return Auth::user()
                ->permissions()
                ->where('permissions.name', '=', 'delete_prefecture')
                ->count() > 0;
    }
}
