<?php

namespace App\Http\Controllers\Master\Court;

use App\Http\Controllers\Controller;
use App\CourtType;
use Illuminate\Http\Request;

class CourtTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master.court.type.index', ['courtTypes' => CourtType::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.court.type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        $validation = $this->validate($request, [
            'title' => 'required|unique:title|max:255|string',
            'description' => 'nullable|string'
        ],
        [
            'title.required' => 'Title cannot be empty',
        ]
        );
        return $validation->fails() ? redirect()->back() : $this->storeCourtType($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CourtType  $courtType
     * @return \Illuminate\Http\Response
     */
    public function show(CourtType $courtType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CourtType  $courtType
     * @return \Illuminate\Http\Response
     */
    public function edit(CourtType $courtType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CourtType  $courtType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourtType $courtType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CourtType  $courtType
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourtType $courtType)
    {
        //
    }

    private function storeCourtType($request) {
        $courtType = new CourtType();
        $courtType->save();
        return redirect()->route('court-types')->with('message', 'Court Type has been added successfully.');
    }
}
