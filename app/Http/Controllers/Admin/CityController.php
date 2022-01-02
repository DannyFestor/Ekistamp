<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Models\City;
use App\Models\Prefecture;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() : Response
    {
        return Inertia::render('Admin/City/Index', [
            'prefectures' => fn() => Prefecture::orderBy('id')->get(),
            'cities' => City::query()
                ->with(['prefecture:id,name,hiragana,romaji'])
                ->select(['id', 'prefecture_id', 'name', 'hiragana', 'katakana', 'romaji'])
                ->when(request()->input('prefecture'), function ($query, $value) {
                    if (intval($value) > 0) {
                        $query->where('prefecture_id', '=', $value);
                    }
                })
                ->when(request()->input('city'), function ($query, $value) {
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
            'filters' => request()->only(['city', 'prefecture']),
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
            'Admin/City/Create',
            [
                'prefectures' => fn() => Prefecture::orderBy('id')->get(),
                'filters' => request()->only(['city', 'prefecture']),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCityRequest $request
     *
     * @return RedirectResponse
     */
    public function store(StoreCityRequest $request) : RedirectResponse
    {
        $city = City::create([
            'prefecture_id' => $request->prefecture_id,
            'name' => $request->kanji,
            'hiragana' => $request->hiragana,
            'katakana' => $request->katakana,
            'romaji' => Str::lower($request->romaji),
        ]);
        return redirect()
            ->route('admin.cities.index', [
                'city' => $request->city,
                'prefecture' => $request->prefecture,
            ])
            ->with('success', 'City was created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\City $city
     *
     * @return Response
     */
    public function edit(City $city) : Response
    {
        return Inertia::render('Admin/City/Edit', [
            'prefectures' => fn() => Prefecture::orderBy('id')->get(),
            'city' => $city,
            'filters' => request()->only(['prefecture', 'city']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param \App\Models\City $city
     *
     * @return RedirectResponse
     */
    public function update(UpdateCityRequest $request, City $city) : RedirectResponse
    {
        $city->fill([
            'prefecture_id' => $request->prefecture_id,
            'name' => $request->kanji,
            'hiragana' => $request->hiragana,
            'katakana' => $request->katakana,
            'romaji' => Str::lower($request->romaji),
        ]);
        $city->save();

        return redirect()
            ->route('admin.cities.index', [
                'prefecture' => request()->input('prefecture'),
                'city' => request()->input('city'),
            ])
            ->with('success', 'City was edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\City $city
     *
     * @return RedirectResponse
     */
    public function destroy(City $city) : RedirectResponse
    {
        $city->delete();

        return redirect()
            ->route('admin.cities.index', [
                'prefecture' => request()->input('prefecture'),
                'city' => request()->input('city'),
            ])
            ->with('success', 'City was deleted');
    }
}
