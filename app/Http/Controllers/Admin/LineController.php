<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLineRequest;
use App\Http\Requests\UpdateLineRequest;
use App\Models\Company;
use App\Models\Line;
use App\Models\Prefecture;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class LineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return Inertia::render('Admin/Line/Index', [
            'lines' => Line::query()
                ->select(['id', 'name', 'hiragana', 'katakana', 'romaji', 'prefecture_id', 'company_id'])
                ->with(['prefecture:id,name,romaji', 'company:id,name,romaji'])
                ->when(request()->input('line'), function ($query, $value) {
                    $query->where(function (Builder $query) use ($value) {
                        $search = Str::lower($value);
                        $search = Str::replace('-', '', $search);
                        $query->whereRaw("LOWER(name) like '%$search%'");
                        $query->orWhereRaw("LOWER(hiragana) like '%$search%'");
                        $query->orWhereRaw("LOWER(romaji) like '%$search%'");
                    });
                })
                ->orderBy('id')
                ->paginate(24)
                ->withQueryString()
            ,
            'filters' => request()->only(['line']),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() : Response
    {
        return Inertia::render(
            'Admin/Line/Create',
            [
                'prefectures' => Prefecture::select(['id','name','hiragana','romaji'])->get(),
                'companies' => fn () => Company::query()
                    ->select(['id', 'name', 'hiragana', 'romaji'])
                    ->when(request()->input('company'), function ($query, $value) {
                        logger()->debug($value);
                        $search = Str::lower($value);
                        $search = Str::replace('-', '', $search);
                        $query->whereRaw("LOWER(name) like '%$search%'");
                        $query->orWhereRaw("LOWER(hiragana) like '%$search%'");
                        $query->orWhereRaw("LOWER(romaji) like '%$search%'");
                    })
                    ->limit(5)
                    ->get()
                ,
                'filters' => request()->only(['line']),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreLineRequest $request
     *
     * @return RedirectResponse
     */
    public function store(StoreLineRequest $request) : RedirectResponse
    {
        $line = Line::create([
            'prefecture_id' => $request->prefecture_id,
            'company_id' => $request->company_id,
            'name' => $request->kanji,
            'hiragana' => $request->hiragana,
            'katakana' => $request->katakana,
            'romaji' => $request->romaji,
        ]);
        return redirect()
            ->route('admin.lines.index', [
                'line' => $line->name,
            ])
            ->with('success', 'Line was created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Line  $line
     *
     * @return Response
     */
    public function edit(Line $line)
    {
        $line->load(['company']);
        return Inertia::render('Admin/Line/Edit', [
            'line' => $line,
            'prefectures' => Prefecture::select(['id','name','hiragana','romaji'])->get(),
            'companies' => fn () => Company::query()
                ->select(['id', 'name', 'hiragana', 'romaji'])
                ->when(request()->input('company'), function ($query, $value) {
                    logger()->debug($value);
                    $search = Str::lower($value);
                    $search = Str::replace('-', '', $search);
                    $query->whereRaw("LOWER(name) like '%$search%'");
                    $query->orWhereRaw("LOWER(hiragana) like '%$search%'");
                    $query->orWhereRaw("LOWER(romaji) like '%$search%'");
                })
                ->limit(5)
                ->get()
            ,
            'filters' => request()->only(['line']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Line  $line
     *
     * @return RedirectResponse
     */
    public function update(UpdateLineRequest $request, Line $line)
    {
        $line->fill([
            'prefecture_id' => $request->prefecture_id,
            'company_id' => $request->company_id,
            'name' => $request->kanji,
            'hiragana' => $request->hiragana,
            'katakana' => $request->katakana,
            'romaji' => $request->romaji,
        ]);
        $line->save();

        return redirect()
            ->route('admin.lines.index', [
                'line' => $line->name,
            ])
            ->with('success', 'Line was edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Line  $line
     *
     * @return RedirectResponse
     */
    public function destroy(Line $line)
    {
        $line->delete();

        return redirect()
            ->route('admin.lines.index')
            ->with('success', 'Line was deleted');
    }
}
