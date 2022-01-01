<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request)
    {
        return array_merge(parent::share($request), [
            'auth' => Auth::user() ? [
                'user' => [
                    'username' => Auth::user()->name,
                    'email' => Auth::user()->email,
                ],
                'can' => $request->routeIs('admin.*') ?
                    Auth::user()->permissions()->pluck('permissions.name')->toArray()
                    : Auth::user()->permissions()->whereIn('permissions.name', ['all', 'access_admin'])->pluck('permissions.name')->toArray(),
            ] : null
        ]);
    }
}
