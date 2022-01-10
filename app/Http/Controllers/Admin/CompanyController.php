<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() : Response
    {
        return Inertia::render('Admin/Company/Index', [
            'companies' => Company::query()
                ->select(['id', 'name'])
                ->withCount('lines')
                ->when(request()->input('company'), function ($query, $value) {
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
            'filters' => request()->only(['company']),
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
            'Admin/Company/Create',
            [
                'filters' => request()->only(['company']),
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCompanyRequest $request
     *
     * @return RedirectResponse
     */
    public function store(StoreCompanyRequest $request) : RedirectResponse
    {
        $company = Company::create([
            'name' => $request->kanji,
            'hiragana' => $request->hiragana,
            'katakana' => $request->katakana,
            'romaji' => $request->romaji,
        ]);
        return redirect()
            ->route('admin.companies.index', [
                'company' => $company->name,
            ])
            ->with('success', 'Company was created');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Company $company
     *
     * @return Response
     */
    public function edit(Company $company) : Response
    {
        return Inertia::render('Admin/Company/Edit', [
            'company' => $company,
            'filters' => request()->only(['company']),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCompanyRequest $request
     * @param Company              $company
     *
     * @return RedirectResponse
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $company->fill([
            'name' => $request->kanji,
            'hiragana' => $request->hiragana,
            'katakana' => $request->katakana,
            'romaji' => $request->romaji,
        ]);
        $company->save();

        return redirect()
            ->route('admin.companies.index', [
                'company' => $company->name,
            ])
            ->with('success', 'Company was edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Company $company
     *
     * @return RedirectResponse
     */
    public function destroy(Company $company) : RedirectResponse
    {
        $company->delete();

        return redirect()
            ->route('admin.companies.index')
            ->with('success', 'Company was deleted');
    }
}
