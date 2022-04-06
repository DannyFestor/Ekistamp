<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStationRequest;
use App\Http\Requests\UpdateStationRequest;
use App\Models\City;
use App\Models\Prefecture;
use App\Models\Station;
use App\Models\Street;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class StationController extends Controller
{
    public function index() : Response
    {
        return Inertia::render('Admin/Station/Index', [
            'prefectures' => fn() => Prefecture::orderBy('id')->get(),
            'cities' => fn() => City::query()
                ->when(request()->input('prefecture'), function ($query) {
                    $query->where('prefecture_id', '=', request()->input('prefecture'));
                }, function ($query) {
                    $query->where('prefecture_id', '=', 0);
                })
                ->orderBy('romaji')
                ->get(),
            'stations' => Station::query()
                ->select([
                    'id',
                    'name',
                    'hiragana',
                    'katakana',
                    'romaji',
                    'prefecture_id',
                    'city_id',
                    'street_id',
                ])
                ->with([
                    'prefecture:id,name,romaji',
                    'city:id,name,romaji',
                    'street:id,name,romaji',
                ])
                ->when(request()->input('prefecture'), function ($query, $value) {
                    $query->where('prefecture_id', '=', $value);
                })
                ->when(request()->input('city'), function ($query, $value) {
                    $query->where('city_id', '=', $value);
                })
                ->when(request()->input('street'), function ($query, $value) {
                    $query->where('street_id', '=', $value);
                })
                ->when(request()->input('station'), function ($query, $value) {
                    $query->where(function (Builder $query) use ($value) {
                        $search = Str::lower($value);
                        $search = Str::replace('-', '', $search);
                        $query->whereRaw("LOWER(name) like '%$search%'");
                        $query->orWhereRaw("LOWER(hiragana) like '%$search%'");
                        $query->orWhereRaw("LOWER(romaji) like '%$search%'");
                    });
                })
                ->orderBy('id')
                ->paginate(24)
                ->withQueryString()
            ,
            'filters' => request()->only(['station', 'prefecture', 'city']),
        ]);
    }

    public function create() : Response
    {
        return Inertia::render(
            'Admin/Station/Create',
            [
                'prefectures' => Prefecture::query()
                    ->select(['id', 'name', 'hiragana', 'romaji'])
                    ->get(),
                'cities' => fn() => City::query()
                    ->when(request()->input('prefecture'), function ($query) {
                        $query->where('prefecture_id', '=', request()->input('prefecture'));
                    }, function ($query) {
                        $query->where('prefecture_id', '=', 0);
                    })
                    ->orderBy('romaji')
                    ->get(),
                'streets' => fn() => Street::query()
                    ->when(request()->input('city'), function ($query) {
                        $query->where('city_id', '=', request()->input('city'));
                    }, function ($query) {
                        $query->where('city_id', '=', 0);
                    })
                    ->orderBy('romaji')
                    ->get(),
                'filters' => request()->only(['line']),
            ]
        );
    }

    public function store(StoreStationRequest $request)
    {
        $station = Station::create([
            'prefecture_id' => $request->prefecture_id,
            'city_id' => $request->city_id,
            'street_id' => $request->street_id,
            'name' => $request->kanji,
            'hiragana' => $request->hiragana,
            'katakana' => $request->katakana,
            'romaji' => $request->romaji,
        ]);
        return redirect()
            ->route('admin.stations.index', [
                'station' => $station->name,
            ])
            ->with('success', 'Station was created');
    }

    public function edit(Station $station)
    {
        return Inertia::render('Admin/Station/Edit', [
            'station' => $station,
            'prefectures' => Prefecture::select(['id','name','hiragana','romaji'])->get(),
            'cities' => fn() => City::query()
                ->when(request()->input('prefecture'), function ($query) {
                    $query->where('prefecture_id', '=', request()->input('prefecture'));
                }, function ($query) use ($station) {
                    $query->where('prefecture_id', '=', $station->prefecture_id);
                })
                ->orderBy('romaji')
                ->get()
            ,
            'streets' => fn() => Street::query()
                ->when(request()->input('city'), function ($query) {
                    $query->where('city_id', '=', request()->input('city'));
                }, function ($query) use ($station) {
                    $query->where('city_id', '=', $station->city_id);
                })
                ->orderBy('romaji')
                ->get()
            ,
            'filters' => request()->only(['station', 'prefecture', 'city']),
        ]);
    }

    public function update(UpdateStationRequest $request, Station $station)
    {
        $station->fill([
            'prefecture_id' => $request->prefecture_id,
            'city_id' => $request->city_id,
            'street_id' => $request->street_id,
            'name' => $request->kanji,
            'hiragana' => $request->hiragana,
            'katakana' => $request->katakana,
            'romaji' => $request->romaji,
        ]);
        $station->save();

        return redirect()
            ->route('admin.stations.index', [
                'station' => $station->name,
            ])
            ->with('success', 'Station was edited');
    }

    public function destroy(Station $station)
    {
        $station->delete();

        return redirect()
            ->route('admin.stations.index')
            ->with('success', 'Station was deleted');
    }
}
