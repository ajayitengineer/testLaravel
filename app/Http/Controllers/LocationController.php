<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\Vehicle;

class LocationController extends Controller
{

	public function vehicles(){
      $list = Vehicle::get();

      return response()->json(['message' => 'success','payloads' => $list],200);
	}
    public function index($id){

  		$locations = Location::where('vehicle_id',$id)->get();
      	return response()->json(['message' => 'success','payloads' => $locations],200);
    }
}
