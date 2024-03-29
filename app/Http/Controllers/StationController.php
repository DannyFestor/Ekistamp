<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStationRequest;
use App\Http\Requests\UpdateStationRequest;
use App\Models\Station;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() : Response
    {
        return Inertia::render('Station/Index', [
            'stations' => Station::query()
                ->select(['id', 'prefecture_id', 'city_id', 'name', 'hiragana', 'romaji'])
                ->with(['prefecture:id,name,hiragana,romaji'])
                ->withCount('lines')
                ->withCount(['stamps' => function ($query) {
                    $query->where('is_approved', '=', true);
                }])
                ->when(request()->input('station'), function ($query, $value) {
                    $search = Str::lower($value);
                    $query->where('name', 'like', "%{$search}%");
                    $query->orWhere('hiragana', 'like', "%{$search}%");
                    $query->orWhere('romaji', 'like', "%{$search}%");
                })
                ->when(request()->input('prefecture'), function ($query, $value) {
                    $query->whereHas('prefecture', function ($query) use ($value) {
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
            'filters' => request()->only(['station', 'prefecture']),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreStationRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Station $station
     *
     * @return Response
     */
    public function show(Station $station) : Response
    {
        $station->load([
            'prefecture:id,name,hiragana,romaji',
            'city:id,name,hiragana,romaji',
            'street:id,postcode_id,name,hiragana,romaji',
            'street.postcode:id,postcode',
            'lines:id,name',
            'lines.stations' => function ($query) {
                $query->select(['id', 'name', 'romaji']);
                $query->orderByPivot('order');
            },
            'stamps' => function (HasMany $query) {
                $query->select(['id', 'station_id', 'name','name_eng']);
//                $query->whereRaw('is_approved = true');
                $query->where('is_approved', true);
            }
        ]);
        return Inertia::render('Station/Show', [
            'station' => $station,
            'filters' => request()->only(['station', 'prefecture']),
            // TODO: User Station Stamps
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Station $station
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Station $station)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateStationRequest $request
     * @param Station                                 $station
     *
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStationRequest $request, Station $station)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Station $station
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Station $station)
    {
        //
    }
}
