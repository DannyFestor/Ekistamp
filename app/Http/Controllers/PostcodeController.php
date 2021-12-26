<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostcodeRequest;
use App\Http\Requests\UpdatePostcodeRequest;
use App\Models\Postcode;

class PostcodeController extends Controller
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
     * @param  \App\Http\Requests\StorePostcodeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostcodeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postcode  $postcode
     * @return \Illuminate\Http\Response
     */
    public function show(Postcode $postcode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postcode  $postcode
     * @return \Illuminate\Http\Response
     */
    public function edit(Postcode $postcode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostcodeRequest  $request
     * @param  \App\Models\Postcode  $postcode
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostcodeRequest $request, Postcode $postcode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postcode  $postcode
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postcode $postcode)
    {
        //
    }
}
