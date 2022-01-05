<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\StoreStreetRequest;
use App\Http\Requests\UpdateStreetRequest;
use App\Models\City;
use App\Models\Postcode;
use App\Models\Prefecture;
use App\Models\Street;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class StreetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() : Response
    {
        return Inertia::render('Admin/Street/Index', [
            'prefectures' => fn() => Prefecture::orderBy('id')->get(),
            'cities' => fn() => City::query()
                ->when(request()->input('prefecture'), function ($query) {
                    $query->where('prefecture_id', '=', request()->input('prefecture'));
                }, function ($query) {
                    $query->where('prefecture_id', '=', 0);
                })
                ->orderBy('romaji')
                ->get(),
            'streets' => Street::query()
                ->with(['prefecture:id,name,hiragana,romaji', 'city:id,name,hiragana,romaji'])
                ->select(['id', 'prefecture_id', 'city_id', 'name', 'hiragana', 'katakana', 'romaji'])
                ->when(request()->input('prefecture'), function ($query, $value) {
                    $query->where('prefecture_id', '=', $value);
                })
                ->when(request()->input('city'), function ($query, $value) {
                    $query->where('city_id', '=', $value);
                })
                ->when(request()->input('street'), function ($query, $value) {
                    $query->where(function ($query) use ($value) {
                        $search = Str::lower($value);
                        $query->where('name', 'like', "%$search%");
                        $query->orWhere('hiragana', 'like', "%$search%");
                        $query->orWhere('romaji', 'like', "%$search%");
                    });
                })
                ->orderBy('romaji')
                ->paginate(24)
                ->withQueryString()
            ,
            'filters' => request()->only(['street', 'city', 'prefecture']),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() : Response
    {
        return Inertia::render(
            'Admin/Street/Create',
            [
                'prefectures' => fn() => Prefecture::orderBy('id')->get(),
                'cities' => fn() => City::query()
                    ->select(['id', 'name', 'romaji'])
                    ->when(request()->input('prefecture'), function ($query) {
                        $query->where('prefecture_id', '=', request()->input('prefecture'));
                    }, function ($query) {
                        $query->where('prefecture_id', '=', 0);
                    })
                    ->orderBy('romaji')
                    ->get(),
                'postcodes' => fn() => Postcode::query()
                    ->select(['id', 'postcode'])
                    ->when(request()->input('prefecture'), function ($query) {
                        $query->where('prefecture_id', '=', request()->input('prefecture'));
                    }, function ($query) {
                        $query->where('prefecture_id', '=', 0);
                    })
                    ->when(request()->input('city'), function ($query) {
                        $query->where('city_id', '=', request()->input('city'));
                    }, function ($query) {
                        $query->where('city_id', '=', 0);
                    })
                    ->orderBy('postcode')
                    ->get(),
                'filters' => request()->only(['city', 'prefecture']),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreStreetRequest $request
     *
     * @return RedirectResponse
     */
    public function store(StoreStreetRequest $request) : RedirectResponse
    {
        $street = Street::create([
            'prefecture_id' => $request->prefecture_id,
            'city_id' => $request->city_id,
            'postcode_id' => $request->postcode_id,
            'name' => $request->kanji,
            'hiragana' => $request->hiragana,
            'katakana' => $request->katakana,
            'romaji' => Str::lower($request->romaji),
        ]);
        return redirect()
            ->route('admin.streets.index', [
                'street' => $street->kanji,
                'city' => $street->city_id,
                'prefecture' => $street->prefecture_id,
            ])
            ->with('success', 'Street was created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Street $street
     *
     * @return Response
     */
    public function edit(Street $street)
    {
        return Inertia::render('Admin/Street/Edit', [
            'prefectures' => fn() => Prefecture::orderBy('id')->get(),
            'cities' => fn() => City::query()
                ->select(['id', 'name', 'romaji'])
                ->when(request()->input('prefecture'), function ($query) {
                    $query->where('prefecture_id', '=', request()->input('prefecture'));
                }, function ($query) use ($street) {
                    $query->where('prefecture_id', '=', $street->prefecture_id);
                })
                ->orderBy('romaji')
                ->get(),
            'postcodes' => fn() => Postcode::query()
                ->select(['id', 'postcode'])
                ->when(request()->input('prefecture'), function ($query) {
                    $query->where('prefecture_id', '=', request()->input('prefecture'));
                }, function ($query) use ($street) {
                    $query->where('prefecture_id', '=', $street->prefecture_id);
                })
                ->when(request()->input('city'), function ($query) {
                    $query->where('city_id', '=', request()->input('city'));
                }, function ($query) use ($street) {
                    $query->where('city_id', '=', $street->city_id);
                })
                ->orderBy('postcode')
                ->get(),
            'street' => $street,
            'filters' => request()->only(['prefecture', 'city']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request            $request
     * @param \App\Models\Street $street
     *
     * @return RedirectResponse
     */
    public function update(UpdateStreetRequest $request, Street $street)
    {
        $street->fill([
            'prefecture_id' => $request->prefecture_id,
            'city_id' => $request->city_id,
            'postcode_id' => $request->postcode_id,
            'name' => $request->kanji,
            'hiragana' => $request->hiragana,
            'katakana' => $request->katakana,
            'romaji' => Str::lower($request->romaji),
        ]);
        $street->save();

        return redirect()
            ->route('admin.streets.index', [
                'prefecture' => $street->prefecture_id,
                'city' => $street->city_id,
                'street' => $street->name,
            ])
            ->with('success', 'Street was edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Street $street
     *
     * @return RedirectResponse
     */
    public function destroy(Street $street) : RedirectResponse
    {
        $street->delete();

        return redirect()
            ->route('admin.streets.index', [
                'prefecture' => $street->prefecture_id,
                'city' => $street->city_id,
            ])
            ->with('success', 'Street was deleted');
    }
}
