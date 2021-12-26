<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStampUserRequest;
use App\Http\Requests\UpdateStampUserRequest;
use App\Models\StampUser;

class StampUserController extends Controller
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
     * @param  \App\Http\Requests\StoreStampUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStampUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StampUser  $stampUser
     * @return \Illuminate\Http\Response
     */
    public function show(StampUser $stampUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StampUser  $stampUser
     * @return \Illuminate\Http\Response
     */
    public function edit(StampUser $stampUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStampUserRequest  $request
     * @param  \App\Models\StampUser  $stampUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStampUserRequest $request, StampUser $stampUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StampUser  $stampUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(StampUser $stampUser)
    {
        //
    }
}
