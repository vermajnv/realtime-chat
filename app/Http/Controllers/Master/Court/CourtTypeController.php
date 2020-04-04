<?php

namespace App\Http\Controllers\Master\Court;

use App\Http\Controllers\Controller;
use App\CourtType;
use App\Translation\CourtTypeTranslation;
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
        $validation = $this->validate($request, [
            'en_title' => 'required|unique:court_type_translations,title|max:255|string',
            'hi_title' => 'required|unique:court_type_translations,title|max:255|string',
            'en_description' => 'nullable|string',
            'hi_description' => 'nullable|string',
        ],
        [
            'en_title.required' => 'Please add the title in English',
            'hi_title.required' => 'Please add the title in Hindi',
        ]
        );
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
        $courtTypeData = [
       'en' => [
           'title'       => $request->en_title,
           'description' => $request->en_description
       ],
       'hi' => [
           'title'       => $request->hi_title,
           'description' => $request->hi_description
       ],
    ];
        CourtType::create($courtTypeData);
        return redirect()->route('court-type')->with('message', 'Court Type has been added successfully.');
    }
}
