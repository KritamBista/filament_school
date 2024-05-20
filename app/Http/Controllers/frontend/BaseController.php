<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutPost;
use App\Models\AcademicPost;
use App\Models\Carousel;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct() {
        $school =School::first();
        $abouts =AboutPost::all();
        $academics =AcademicPost::all();
        $carousels =Carousel::all();
        View::share([
            'school'=>$school,
            'abouts'=>$abouts,
            'academics'=>$academics,
            'carousels'=>$carousels

        ]);

    }
}
