<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AboutResource;
use App\Http\Resources\EventResource;
use App\Http\Resources\FacilityResource;
use App\Http\Resources\SchoolResource;
use App\Models\AboutPost;
use App\Models\Event;
use App\Models\Facillity;
use App\Models\School;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    function school(){
        $school =School::first();
     return response()->json(['success'=>true,'status'=>200,  'school'=>new SchoolResource($school)]);
    }


    function about(){
        $about =AboutPost::all();
        return response()->json(['sucsess'=>true,'status'=>200 ,'about'=>new AboutResource($about)]);
    }

    function facility(){
        $facility=Facillity::all();
        return response()->json(['facility'=>new FacilityResource($facility)]);
    }

    function events(){
        $event =Event::all();
        return response()->json(['event'=>new EventResource($event)]);
    }
}
