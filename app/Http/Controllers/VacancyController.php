<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorevacancyRequest;
use App\Http\Requests\UpdatevacancyRequest;
use App\Models\vacancy;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('company.vacancy');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorevacancyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(vacancy $vacancy)
    {
        //
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
