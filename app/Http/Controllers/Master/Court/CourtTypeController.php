<?php

namespace App\Http\Controllers\Master\Court;

use Illuminate\Http\Request;
use App\Http\Requests\CourtTypeValidator;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\CourtType;
use App\Translation\CourtTypeTranslation;

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
    public function store(CourtTypeValidator $request)
    {
        return $this->storeCourtType($request);
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
        return view('master.court.type.edit', ['courtType' => $courtType]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CourtType  $courtType
     * @return \Illuminate\Http\Response
     */
    public function update(CourtTypeValidator $request, CourtType $courtType)
    {
        $article = CourtType::findOrFail($courtType->id);
        $article->update($this->getCourtTypeData($request));
        return redirect()->route('court-type.index')->with('message', 'Court Type has been updated successfully.');
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
        $courtTypeData = $this->getCourtTypeData($request);
        CourtType::create($courtTypeData);
        return redirect()->route('court-type.index')->with('message', 'Court Type has been added successfully.');
    }

    private function getCourtTypeData($request)
    {
        return [
           'en' => [
               'title'       => $request->en_title,
               'description' => $request->en_description
           ],
           'hi' => [
               'title'       => $request->hi_title,
               'description' => $request->hi_description
           ],
        ];
    }
}
