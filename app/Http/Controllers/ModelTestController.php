<?php

namespace App\Http\Controllers;

use App\Models\ModelTest;
use Illuminate\Http\Request;

class ModelTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        dd(1);
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ModelTest $modelTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModelTest $modelTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModelTest $modelTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModelTest $modelTest)
    {
        //
    }
}
