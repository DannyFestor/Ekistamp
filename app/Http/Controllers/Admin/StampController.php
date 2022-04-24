<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStampRequest;
use App\Http\Requests\UpdateStampRequest;
use App\Models\City;
use App\Models\Company;
use App\Models\Prefecture;
use App\Models\Stamp;
use App\Models\StampUser;
use App\Models\Station;
use App\Models\Street;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class StampController extends Controller
{
    public function index() : Response
    {
        return Inertia::render('Admin/Stamp/Index', [
            'stamps' => Stamp::query()
                ->select([
                    'id',
                    'name',
                    'name_eng',
                    'description',
                    'description_eng',
                    'is_approved',
                    'station_id',
                    'company_id',
                ])->with([
                    'station:id,name,romaji',
                    'company:id,name,romaji',
                ])
                ->when(
                    request()->input('stamp'),
                    function ($query, $value) {
                        $query->where(function (Builder $query) use ($value) {
                            $search = Str::lower($value);
                            $search = Str::replace('-', '', $search);
                            $query->whereRaw("LOWER(name) like '%$search%'");
                            $query->orWhereRaw("LOWER(name_eng) like '%$search%'");
                        });
                    }
                )
                ->when(
                    request()->input('station'),
                    function ($query, $value) {
                        $query->where(function (Builder $query) use ($value) {
                            $search = Str::lower($value);
                            $search = Str::replace('-', '', $search);
                            $query->whereRaw("LOWER(name) like '%$search%'");
                            $query->orWhereRaw("LOWER(hiragana) like '%$search%'");
                            $query->orWhereRaw("LOWER(romaji) like '%$search%'");
                        });
                    }
                )->orderBy('id')->paginate(24)->withQueryString(),
            'filters' => request()->only(['stamp', 'station']),
        ]);
    }

    public function create(Request $request) : Response
    {
        return Inertia::render(
            'Admin/Stamp/Create',
            [
                'stations' => fn() => Station::query()
                    ->with('prefecture:name,romaji')
                    ->when($request->input('station'), function (Builder $query, $value) {
                        $search = Str::lower($value);
                        $search = Str::replace('-', '', $search);
                        $query->whereRaw("LOWER(name) like '%$search%'");
                        $query->orWhereRaw("LOWER(hiragana) like '%$search%'");
                        $query->orWhereRaw("LOWER(romaji) like '%$search%'");
                    })
                    ->select(['id', 'name', 'hiragana', 'romaji', 'prefecture_id'])
                    ->limit(5)
                    ->orderBy('hiragana')
                    ->get(),
                'companies' => fn() => Company::query()
                    ->when($request->input('company'), function (Builder $query, $value) {
                        $search = Str::lower($value);
                        $search = Str::replace('-', '', $search);
                        $query->whereRaw("LOWER(name) like '%$search%'");
                        $query->orWhereRaw("LOWER(hiragana) like '%$search%'");
                        $query->orWhereRaw("LOWER(romaji) like '%$search%'");
                    })
                    ->select(['id', 'name', 'hiragana', 'romaji'])
                    ->limit(5)
                    ->orderBy('hiragana')
                    ->get(),
                'filters' => request()->only([
                    'companies',
                    'stations',
                ]),
            ]
        );
    }

    public function store(StoreStampRequest $request)
    {
        $stamp = Stamp::create([
            'user_id' => $request->user()->id,
            'station_id' => $request->station_id,
            'company_id' => $request->company_id,
            'name' => $request->name,
            'name_eng' => $request->name_eng,
            'description' => $request->description,
            'description_eng' => $request->description_eng,
            'is_approved' => true,
        ]);
        return redirect()
            ->route('admin.stamps.index', [
                'stamp' => $stamp->name,
            ])
            ->with('success', 'Stamp was created');
    }

    public function edit(Request $request, Stamp $stamp)
    {
        $stamp->load(['station', 'company']);
        return Inertia::render('Admin/Stamp/Edit', [
            'stamp' => $stamp,
            'stations' => fn() => Station::query()
                ->with('prefecture:name,romaji')
                ->when($request->input('station'), function (Builder $query, $value) {
                    $search = Str::lower($value);
                    $search = Str::replace('-', '', $search);
                    $query->whereRaw("LOWER(name) like '%$search%'");
                    $query->orWhereRaw("LOWER(hiragana) like '%$search%'");
                    $query->orWhereRaw("LOWER(romaji) like '%$search%'");
                }, function (Builder $query) use ($stamp) {
                    $query->where('id', '=', $stamp->station_id);
                })
                ->select(['id', 'name', 'hiragana', 'romaji', 'prefecture_id'])
                ->limit(5)
                ->orderBy('hiragana')
                ->get(),
            'companies' => fn() => Company::query()
                ->when($request->input('company'), function (Builder $query, $value) {
                    $search = Str::lower($value);
                    $search = Str::replace('-', '', $search);
                    $query->whereRaw("LOWER(name) like '%$search%'");
                    $query->orWhereRaw("LOWER(hiragana) like '%$search%'");
                    $query->orWhereRaw("LOWER(romaji) like '%$search%'");
                }, function (Builder $query) use ($stamp) {
                    $query->where('id', '=', $stamp->company_id);
                })
                ->select(['id', 'name', 'hiragana', 'romaji'])
                ->limit(5)
                ->orderBy('hiragana')
                ->get(),
            'filters' => request()->only([
                'stamp',
                'companies',
                'stations',
            ]),
        ]);
    }

    public function update(UpdateStampRequest $request, Stamp $stamp)
    {
        $stamp->fill([
            'station_id' => $request->station_id,
            'company_id' => $request->company_id,
            'name' => $request->name,
            'name_eng' => $request->name_eng,
            'description' => $request->description,
            'description_eng' => $request->description_eng,
            'is_approved' => $request->is_approved,
        ]);
        $stamp->save();

        return redirect()
            ->route('admin.stamps.index', [
                'stamp' => $stamp->name,
            ])
            ->with('success', 'Stamp was edited');
    }

    public function destroy(Stamp $stamp)
    {
        StampUser::where('stamp_id', '=', $stamp->id)->delete();
        $stamp->delete();

        return redirect()
            ->route('admin.stamps.index')
            ->with('success', 'Stamp was deleted');
    }
}
