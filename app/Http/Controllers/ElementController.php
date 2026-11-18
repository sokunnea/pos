<?php

namespace App\Http\Controllers;

use App\Models\Element;
use Illuminate\Http\Request;

class ElementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('element.index', [
            'elements' => Element::latest()->paginate(3)
        ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('elements.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Element::create($request->validated());

        return redirect()->route('elements.index')
                ->withSuccess('New Element is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Element $element)
    {
        return view('elements.show', compact('element'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Element $element)
    {
        return view('elements.edit', compact('element'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Element $element)
    {
        $element->update($request->validated());

        return redirect()->back()
                ->withSuccess('Element is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Element $element)
    {
        $element->delete();

        return redirect()->route('element.index')
                ->withSuccess('Element is deleted successfully.');
    }
}
