<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePrefectureRequest;
use App\Http\Requests\UpdatePrefectureRequest;
use App\Models\Prefecture;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class PrefectureController extends Controller
{
    public function index() : Response
    {
        $columns = [
            'id' => ['label' => 'id', 'hidden' => true],
            'name' => ['label' => '名義 Name Japanese', 'hidden' => false],
            'hiragana' => ['label' => 'ひらがな Hiragana', 'hidden' => false],
            'katakana' => ['label' => 'カタカナ Katakana', 'hidden' => false],
            'romaji' => ['label' => 'ローマ字 Name English', 'hidden' => false],
        ];

        return Inertia::render('Admin/Prefecture/Index', [
            'prefectures' => Prefecture::query()
                ->select(array_keys($columns))
                ->when(request()->input('prefecture'), function ($query, $value) {
                    $search = Str::lower($value);
                    $query->where('name', 'like', "%$search%");
                    $query->orWhere('hiragana', 'like', "%$search%");
                    $query->orWhere('romaji', 'like', "%$search%");
                })
                ->when(request()->input('order_col'), function (Builder $query, $value) use ($columns) {
                    if(!array_key_exists($value, $columns)) {
                        return;
                    }

                    $orderDir = 'asc';
                    if(request()->input('order_dir') && request()->input('order_dir') === 'desc') {
                        $orderDir = 'desc';
                    }

                    $query->orderBy($value, $orderDir);
                }, function(Builder $query) {
                    $query->orderBy('id');
                })
                ->paginate(24)
                ->withQueryString()
            ,
            'columns' => $columns,
            'filters' => request()->only(['prefecture', 'order_col', 'order_dir']),
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
