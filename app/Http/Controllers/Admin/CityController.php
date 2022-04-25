<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;
use App\Models\City;
use App\Models\Prefecture;
use Illuminate\Database\Eloquent\Builder;
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
        $columns = [
            'id' => ['label' => 'id', 'hidden' => true, 'orderable' => true],
            'name' => ['label' => '名義 Name Japanese', 'hidden' => false, 'orderable' => true],
            'hiragana' => ['label' => 'ひらがな Hiragana', 'hidden' => false, 'orderable' => true],
            'katakana' => ['label' => 'カタカナ Katakana', 'hidden' => false, 'orderable' => true],
            'romaji' => ['label' => 'ローマ字 Name English', 'hidden' => false, 'orderable' => true],
            'prefecture_name' => ['label' => '都道府県 Prefecture', 'hidden' => false, 'orderable' => true],
            'prefecture_hiragana' => ['label' => '都道府県 ひらがな Hiragana', 'hidden' => true, 'orderable' => true],
            'prefecture_katakana' => ['label' => '都道府県 カタカナ Katakana', 'hidden' => true, 'orderable' => true],
            'prefecture_romaji' => ['label' => '都道府県 ローマ字 Name English', 'hidden' => false, 'orderable' => true],
        ];

        return Inertia::render('Admin/City/Index', [
            'prefectures' => fn() => Prefecture::orderBy('id')->get(),
            'cities' => City::query()
                ->select(
                    [
                        'cities.id',
                        'cities.prefecture_id',
                        'cities.name',
                        'cities.hiragana',
                        'cities.katakana',
                        'cities.romaji',
                        'prefectures.name as prefecture_name',
                        'prefectures.hiragana as prefecture_hiragana',
                        'prefectures.katakana as prefecture_katakana',
                        'prefectures.romaji as prefecture_romaji',
                    ]
                )
                ->join('prefectures', 'prefectures.id', '=', 'cities.prefecture_id')
                ->when((int)request()->input('prefecture'), function ($query, $value) {
                    $query->where('cities.prefecture_id', '=', $value);
                })
                ->when(request()->input('city'), function ($query, $value) {
                    $query->where(function ($query) use ($value) {
                        $search = Str::lower($value);
                        $query->where('cities.name', 'like', "%$search%");
                        $query->orWhere('cities.hiragana', 'like', "%$search%");
                        $query->orWhere('cities.romaji', 'like', "%$search%");
                    });
                })
                ->when(request()->input('order_col'), function (Builder $query, $value) use ($columns) {
logger()->debug($value);
                    if(
                        !array_key_exists($value, $columns) ||
                        !isset($columns[$value]['orderable']) ||
                        !$columns[$value]['orderable']
                    ) {
                        return;
                    }

                    $orderDir = 'asc';
                    if(request()->input('order_dir') && request()->input('order_dir') === 'desc') {
                        $orderDir = 'desc';
                    }

                    $query->orderBy($value, $orderDir);
                }, function(Builder $query) {
                    $query->orderBy('id');
                })
                ->paginate(24)
                ->withQueryString()
            ,
            'columns' => $columns,
            'filters' => request()->only(['city', 'prefecture', 'order_col', 'order_dir', 'per_page']),
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
