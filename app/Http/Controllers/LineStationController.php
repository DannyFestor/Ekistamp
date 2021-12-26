<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLineStationRequest;
use App\Http\Requests\UpdateLineStationRequest;
use App\Models\LineStation;

class LineStationController extends Controller
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
     * @param  \App\Http\Requests\StoreLineStationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLineStationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LineStation  $lineStation
     * @return \Illuminate\Http\Response
     */
    public function show(LineStation $lineStation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LineStation  $lineStation
     * @return \Illuminate\Http\Response
     */
    public function edit(LineStation $lineStation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLineStationRequest  $request
     * @param  \App\Models\LineStation  $lineStation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLineStationRequest $request, LineStation $lineStation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LineStation  $lineStation
     * @return \Illuminate\Http\Response
     */
    public function destroy(LineStation $lineStation)
    {
        //
    }
}
