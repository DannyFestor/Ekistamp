<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostcodeRequest;
use App\Http\Requests\UpdatePostcodeRequest;
use App\Models\City;
use App\Models\Postcode;
use App\Models\Prefecture;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class PostcodeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() : Response
    {
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
                ->with(['prefecture:id,name,hiragana,romaji', 'city:id,name,hiragana,romaji', 'streets:id,postcode_id,name,romaji'])
                ->select(['id', 'prefecture_id', 'city_id', 'postcode'])
                ->when(request()->input('prefecture'), function ($query, $value) {
                    $query->where('prefecture_id', '=', $value);
                })
                ->when(request()->input('city'), function ($query, $value) {
                    $query->where('city_id', '=', $value);
                })
                ->when(request()->input('postcode'), function ($query, $value) {
                    $query->where(function ($query) use ($value) {
                        $search = Str::lower($value);
                        $search = Str::replace('-', '', $search);
                        $query->where('postcode', 'like', "%$search%");
                    });
                })
                ->orderBy('postcode')
                ->paginate(24)
                ->withQueryString()
            ,
            'filters' => request()->only(['postcode', 'city', 'prefecture']),
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
            'postcode_prefix' => Str::substr($request->postcode, 0, 3)
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
            'postcode_prefix' => Str::substr($request->postcode, 0, 3)
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
