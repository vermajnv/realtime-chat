<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;
use App\State;

class StateCityController extends Controller
{
    public function getCity($state_id = '')
    {
        $cities = City::where(['state_id' => $state_id])->get();
        return view('master.includes.city-dropdown', ['cities' => $cities]);
    }
}
