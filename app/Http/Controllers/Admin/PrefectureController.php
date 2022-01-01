<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePrefectureRequest;
use App\Models\Prefecture;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class PrefectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() : Response
    {
        return Inertia::render('Admin/Prefecture/Index', [
            'prefectures' => Prefecture::query()
                ->select(['id', 'name', 'hiragana', 'katakana', 'katakana_half', 'romaji'])
                ->when(request()->input('prefecture'), function ($query, $value) {
                    $search = Str::lower($value);
                    $query->where('name', 'like', "%$search%");
                    $query->orWhere('hiragana', 'like', "%$search%");
                    $query->orWhere('romaji', 'like', "%$search%");
                })
                ->orderBy('id')
                ->paginate(24)
                ->withQueryString()
            ,
            'filters' => request()->only(['prefecture']),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return Inertia::render(
            'Admin/Prefecture/Create',
            [
                'filters' => request()->only(['prefecture']),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return RedirectResponse
     */
    public function store(StorePrefectureRequest $request)
    {
        $prefecture = Prefecture::create([
            'name' => $request->kanji,
            'hiragana' => $request->hiragana,
            'katakana' => $request->katakana,
            'romaji' => Str::lower($request->romaji),
        ]);
        return redirect()
            ->route('admin.prefectures.index')
            ->with('success', 'Prefecture was created');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Prefecture $prefecture
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Prefecture $prefecture)
    {
        return $prefecture;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Prefecture $prefecture
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Prefecture $prefecture)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Prefecture   $prefecture
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prefecture $prefecture)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Prefecture $prefecture
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prefecture $prefecture)
    {
        //
    }
}
