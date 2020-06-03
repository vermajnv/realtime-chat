<?php

namespace App\Http\Controllers\Master\Court;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourtValidator;
use App\Court;
use App\CourtType;
use App\City;
use App\State;
use App\Translation\CourtTranslation;

class CourtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('master.court.index', ['courts' => Court::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('master.court.create', ['cities' => City::all(), 'states' => State::all(), 'courtTypes' => CourtType::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourtValidator $request)
    {
        return $this->storeCourt($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Court $court)
    {
        return view('master.court.edit', ['court' => $court, 'cities' => City::where(['state_id' => $court->state_id])->get(), 'states' => State::all(), 'courtTypes' => CourtType::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourtValidator $request, Court $court)
    {
        $court = Court::findOrFail($court->id);
        $court->update($this->getCourtData($request));
        return redirect()->route('court.index')->with('message', 'Court has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Court $court)
    {
        $court->delete();
        return redirect()->route('court.index')->with('message', 'Court has been deleted successfully.');
    }

    private function storeCourt($request) {
        $courtTypeData = $this->getCourtData($request);
        Court::create($courtTypeData);
        return redirect()->route('court.index')->with('message', 'Court has been added successfully.');
    }

    private function getCourtData($request)
    {
        return [
            'court_type_id' => $request->court_type,
            'state_id' => $request->state,
            'city_id' => $request->city,
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