<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorevacancyRequest;
use App\Http\Requests\UpdatevacancyRequest;
use App\Models\vacancy;
use App\Helpers\helpers;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //memanggil data vacancy
        $magang = vacancy::all()->map(function ($magang){
            $magang->short_description = truncate_words($magang->description, 3);
            return $magang;
        });

        // return view beserta mengirimkan data magang
        return view('vacancy.index', compact('magang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // show form create magang
        return view('vacancy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorevacancyRequest $request)
    {
        // dd($request->all('users_id'));

        // Store ke database
        $validated = $request->validated();

        // dd($validated);

        // Save the data
        $vacancy = new Vacancy();
        $vacancy->users_id = $validated['users_id'];
        $vacancy->title = $validated['title'];
        $vacancy->description = $validated['description'];
        // $vacancy->phone = $validated['phone'];
        $vacancy->save();

        return redirect()->route('admin.add-magang', $vacancy->id)
                         ->with('success', 'Vacancy created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(vacancy $vacancy)
    {
        // show job magang
        // return view('admin.magang');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vacancy $vacancy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatevacancyRequest $request, vacancy $vacancy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vacancy $vacancy)
    {
        //
    }
}
