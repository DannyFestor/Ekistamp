<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePrefectureRequest;
use App\Http\Requests\UpdatePrefectureRequest;
use App\Models\Prefecture;

class PrefectureController extends Controller
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
     * @param  \App\Http\Requests\StorePrefectureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePrefectureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prefecture  $prefecture
     * @return \Illuminate\Http\Response
     */
    public function show(Prefecture $prefecture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prefecture  $prefecture
     * @return \Illuminate\Http\Response
     */
    public function edit(Prefecture $prefecture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePrefectureRequest  $request
     * @param  \App\Models\Prefecture  $prefecture
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePrefectureRequest $request, Prefecture $prefecture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prefecture  $prefecture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prefecture $prefecture)
    {
        //
    }
}
