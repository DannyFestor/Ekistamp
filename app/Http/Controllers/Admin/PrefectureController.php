<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePrefectureRequest;
use App\Http\Requests\UpdatePrefectureRequest;
use App\Models\Prefecture;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class PrefectureController extends Controller
{
    public function index() : Response
    {
        return Inertia::render('Admin/Prefecture/Index', [
            'prefectures' => Prefecture::query()
                ->select(['id', 'name', 'hiragana', 'katakana', 'romaji'])
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

    public function create()
    {
        return Inertia::render(
            'Admin/Prefecture/Create',
            [
                'filters' => request()->only(['prefecture']),
            ]
        );
    }

    public function store(StorePrefectureRequest $request)
    {
        $prefecture = Prefecture::create([
            'name' => $request->kanji,
            'hiragana' => $request->hiragana,
            'katakana' => $request->katakana,
            'romaji' => Str::lower($request->romaji),
        ]);
        return redirect()
            ->route('admin.prefectures.index', [
                'prefecture' => request()->input('prefecture'),
            ])
            ->with('success', 'Prefecture was created');
    }

    public function edit(Prefecture $prefecture)
    {
        return Inertia::render('Admin/Prefecture/Edit', [
            'prefecture' => $prefecture,
            'filters' => request()->only(['prefecture']),
        ]);
    }

    public function update(UpdatePrefectureRequest $request, Prefecture $prefecture)
    {
        $prefecture->fill([
            'name' => $request->kanji,
            'hiragana' => $request->hiragana,
            'katakana' => $request->katakana,
            'romaji' => Str::lower($request->romaji),
        ]);
        $prefecture->save();

        return redirect()
            ->route('admin.prefectures.index', [
                'prefecture' => request()->input('prefecture'),
            ])
            ->with('success', 'Prefecture was edited');
    }

    public function destroy(Prefecture $prefecture)
    {
        $prefecture->delete();

        return redirect()
            ->route('admin.prefectures.index', [
                'prefecture' => request()->input('prefecture'),
            ])
            ->with('success', 'Prefecture was deleted');
    }
}
