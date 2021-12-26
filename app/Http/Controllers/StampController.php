<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStampRequest;
use App\Http\Requests\UpdateStampRequest;
use App\Models\Stamp;

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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stamp  $stamp
     * @return \Illuminate\Http\Response
     */
    public function show(Stamp $stamp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stamp  $stamp
     * @return \Illuminate\Http\Response
     */
    public function edit(Stamp $stamp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStampRequest  $request
     * @param  \App\Models\Stamp  $stamp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStampRequest $request, Stamp $stamp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stamp  $stamp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stamp $stamp)
    {
        //
    }
}
