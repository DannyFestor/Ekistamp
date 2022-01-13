<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreLineRequest;
use App\Models\Company;
use App\Models\Line;
use App\Models\Prefecture;
use Illuminate\Database\Eloquent\Builder;
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
                        $search = Str::lower($value);
                        $search = Str::replace('-', '', $search);
                        $query->whereRaw("LOWER(name) like '%$search%'");
                        $query->orWhereRaw("LOWER(hiragana) like '%$search%'");
                        $query->orWhereRaw("LOWER(romaji) like '%$search%'");
                    })
                    ->limit(5)
                    ->get()
                ,
                'filters' => request()->only(['company']),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Line  $line
     * @return \Illuminate\Http\Response
     */
    public function show(Line $line)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Line  $line
     * @return \Illuminate\Http\Response
     */
    public function edit(Line $line)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Line  $line
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Line $line)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Line  $line
     * @return \Illuminate\Http\Response
     */
    public function destroy(Line $line)
    {
        //
    }
}
