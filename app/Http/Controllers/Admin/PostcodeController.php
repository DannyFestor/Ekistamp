<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostcodeRequest;
use App\Http\Requests\UpdatePostcodeRequest;
use App\Models\City;
use App\Models\Postcode;
use App\Models\Prefecture;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class PostcodeController extends Controller
{
    public function index() : Response
    {
        $columns = [
            'id' => ['label' => 'id', 'hidden' => true, 'orderable' => true],
            'postcode' => ['label' => '郵便番号 Postcode', 'hidden' => false, 'orderable' => true],
            'prefecture_name' => ['label' => '都道府県 Prefecture', 'hidden' => false, 'orderable' => true],
            'prefecture_hiragana' => ['label' => '都道府県 ひらがな Hiragana', 'hidden' => true, 'orderable' => true],
            'prefecture_katakana' => ['label' => '都道府県 カタカナ Katakana', 'hidden' => true, 'orderable' => true],
            'prefecture_romaji' => ['label' => '都道府県 ローマ字 Name English', 'hidden' => false, 'orderable' => true],
            'city_name' => ['label' => '市区町村 City', 'hidden' => false, 'orderable' => true],
            'city_hiragana' => ['label' => '市区町村 ひらがな Hiragana', 'hidden' => true, 'orderable' => true],
            'city_katakana' => ['label' => '市区町村 カタカナ Katakana', 'hidden' => true, 'orderable' => true],
            'city_romaji' => ['label' => '市区町村 ローマ字 Name English', 'hidden' => false, 'orderable' => true],
            'street_name' => ['label' => '道路 City', 'hidden' => false, 'orderable' => true],
            'street_romaji' => ['label' => '道路 ローマ字 Name English', 'hidden' => false, 'orderable' => true],
        ];

        return Inertia::render('Admin/Postcode/Index', [
            'prefectures' => fn() => Prefecture::orderBy('id')->get(),
            'cities' => fn() => City::query()
                ->when(request()->input('prefecture'), function ($query) {
                    $query->where('prefecture_id', '=', request()->input('prefecture'));
                }, function ($query) {
                    $query->where('prefecture_id', '=', 0);
                })
                ->orderBy('romaji')
                ->get(),
            'postcodes' => Postcode::query()
                ->with(
                    [
                        'prefecture:id,name,hiragana,romaji',
                        'city:id,name,hiragana,romaji',
                        'streets:id,postcode_id,name,romaji',
                    ]
                )
                ->join('prefectures', 'prefectures.id', '=', 'postcodes.prefecture_id')
                ->join('cities', 'cities.id', '=', 'postcodes.city_id')
                ->join('streets', 'streets.postcode_id', '=', 'postcodes.id')
                ->select([
                    'postcodes.id',
                    'postcodes.prefecture_id',
                    'postcodes.city_id',
                    'postcodes.postcode',
                    'prefectures.name as prefecture_name',
                    'prefectures.hiragana as prefecture_hiragana',
                    'prefectures.romaji as prefecture_romaji',
                    'cities.name as city_name',
                    'cities.hiragana as city_hiragana',
                    'cities.romaji as city_romaji',
                    'streets.name as street_name',
                    'streets.romaji as street_romaji',
                ])
                ->when(request()->input('prefecture'), function ($query, $value) {
                    $query->where('postcodes.prefecture_id', '=', $value);
                })
                ->when(request()->input('city'), function ($query, $value) {
                    $query->where('postcodes.city_id', '=', $value);
                })
                ->when(request()->input('postcode'), function ($query, $value) {
                    $query->where(function ($query) use ($value) {
                        $search = Str::lower($value);
                        $search = Str::replace('-', '', $search);
                        $query->where('postcodes.postcode', 'like', "%$search%");
                    });
                })
                ->when(request()->input('order_col'), function (Builder $query, $value) use ($columns) {
                    logger()->debug($value);
                    if (
                        !array_key_exists($value, $columns) ||
                        !isset($columns[ $value ][ 'orderable' ]) ||
                        !$columns[ $value ][ 'orderable' ]
                    ) {
                        return;
                    }

                    $orderDir = 'asc';
                    if (request()->input('order_dir') && request()->input('order_dir') === 'desc') {
                        $orderDir = 'desc';
                    }

                    $query->orderBy($value, $orderDir);
                }, function (Builder $query) {
                    $query->orderBy('id');
                })
                ->paginate(24)
                ->withQueryString()
            ,
            'columns' => $columns,
            'filters' => request()->only(['postcode', 'city', 'prefecture', 'order_col', 'order_dir', 'per_page']),
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
            'Admin/Postcode/Create',
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
                'filters' => request()->only(['city', 'prefecture']),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StorePostcodeRequest $request
     *
     * @return RedirectResponse
     */
    public function store(StorePostcodeRequest $request) : RedirectResponse
    {
        $postcode = Postcode::create([
            'prefecture_id' => $request->prefecture_id,
            'city_id' => $request->city_id,
            'postcode' => $request->postcode,
            'postcode_prefix' => Str::substr($request->postcode, 0, 3),
        ]);
        return redirect()
            ->route('admin.postcodes.index', [
                'postcode' => $postcode->postcode,
                'city' => $postcode->city_id,
                'prefecture' => $postcode->prefecture_id,
            ])
            ->with('success', 'Postcode was created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Postcode $postcode
     *
     * @return Response
     */
    public function edit(Postcode $postcode) : Response
    {
        return Inertia::render('Admin/Postcode/Edit', [
            'prefectures' => fn() => Prefecture::orderBy('id')->get(),
            'cities' => fn() => City::query()
                ->select(['id', 'name', 'romaji'])
                ->when(request()->input('prefecture'), function ($query) {
                    $query->where('prefecture_id', '=', request()->input('prefecture'));
                }, function ($query) use ($postcode) {
                    $query->where('prefecture_id', '=', $postcode->prefecture_id);
                })
                ->orderBy('romaji')
                ->get(),
            'postcode' => $postcode,
            'filters' => request()->only(['prefecture', 'city']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdatePostcodeRequest $request
     * @param Postcode              $postcode
     *
     * @return RedirectResponse
     */
    public function update(UpdatePostcodeRequest $request, Postcode $postcode)
    {
        $postcode->fill([
            'prefecture_id' => $request->prefecture_id,
            'city_id' => $request->city_id,
            'postcode' => $request->postcode,
            'postcode_prefix' => Str::substr($request->postcode, 0, 3),
        ]);
        $postcode->save();

        return redirect()
            ->route('admin.postcodes.index', [
                'prefecture' => $postcode->prefecture_id,
                'city' => $postcode->city_id,
                'postcode' => $postcode->postcode,
            ])
            ->with('success', 'Postcode was edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Postcode $postcode
     *
     * @return RedirectResponse
     */
    public function destroy(Postcode $postcode) : RedirectResponse
    {
        $postcode->delete();

        return redirect()
            ->route('admin.postcodes.index', [
                'prefecture' => $postcode->prefecture_id,
                'city' => $postcode->city_id,
            ])
            ->with('success', 'Postcode was deleted');
    }
}
