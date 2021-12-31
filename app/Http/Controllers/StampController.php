<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStampRequest;
use App\Http\Requests\UpdateStampRequest;
use App\Models\Stamp;
use App\Models\Station;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class StampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreStampRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStampRequest $request)
    {
        //
    }
    public function storeImage(Request $request)
    {
        dd($request->image);
    }

    /**
     * Display the specified resource.
     *
     * @param Stamp $stamp
     *
     * @return Response
     */
    public function show(Station $station, Stamp $stamp)
    {
        $stamp->load('media');

        return Inertia::render('Stamp/Show', [
            'station' => $station,
            'stamp' => $stamp,
            'filters' => request()->only(['prefecture', 'station']),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Stamp $stamp
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Stamp $stamp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStampRequest $request
     * @param Stamp                                  $stamp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStampRequest $request, Stamp $stamp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Stamp $stamp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stamp $stamp)
    {
        //
    }
}
