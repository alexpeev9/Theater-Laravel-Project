<?php

namespace App\Http\Controllers;

use App\Models\Performance_locations;
use App\Models\Location;
use App\Models\Performance;
use Illuminate\Routing\Controller as BaseController;


class LocationController extends BaseController
{
    public function getall()
    {
        //$hello = "Hello";
        $locations = Location::all();
        //return view('layouts/location/',array('locations'=>$locations),['hello' => $hello]);
        return view('layouts/location',array('locations'=>$locations));
    }
    public function getById($id)
    {
        //Get Current Location By Id
        $location = Location::where('id', $id)
                        ->first();

        //Get Id's of Matching Performances
        $performance_locations = Performance_locations::where('location_id', $id)
                        ->pluck('performance_id');

        //Link
        $performances = array();
        foreach($performance_locations as $performance_location)
        {
        $performances[] = Performance::all()->where('id', (int)$performance_location);
        }
        return view('layouts.partials.locations.current-location', compact('location','performance_locations','performances'));
    }
}
