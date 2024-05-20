<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutPost;
use App\Models\AcademicPost;
use App\Models\Contact;
use App\Models\Event;
use App\Models\Facillity;
use App\Models\Gallery;
use App\Models\Notice;
use App\Models\School;
use Illuminate\Http\Request;

class FrontendController extends BaseController
{
 function home(){
    // $school =School::first();
    $message =AboutPost::where('slug','message-from-principal-director')->first();
    $notices =Notice::latest()->limit(5)->get();
    $facillities =Facillity::all();
    $galleries =Gallery::latest()->limit(5)->get();
    $news =Event::latest()->limit(5)->get();

   return view('home',compact('message','notices','facillities','galleries','news'));
 }

 function about($slug){
    $about =AboutPost::where('slug',$slug)->first();
    return view('about',compact('about'));
 }

 function academic($slug){
    $academic =AcademicPost::where('slug',$slug)->first();
    return view('academic',compact('academic'));

 }
 function notice(){
    $notices =Notice::latest()->limit(5)->get();
    return view('notice',compact('notices'));
 }
 function gallery(){
    $galleries =Gallery::all();
    return view('gallery',compact('galleries'));
 }

 function contact(){
    $school =School::first();

    return view('contact',compact('school'));
 }

 function message(Request $request){

    $contact =new Contact;
    $contact->name =$request->name;
    $contact->email =$request->email;
    // $contact->phone =$request->phone;
    $contact->message =$request->message;
    $contact->save();
    return redirect()->back();



 }

 function news(){
    $news =Event::latest()->get();
    return view('news',compact('news'));
}

function newsmany($id){
    $newsmany =Event::find($id);
    $news =Event::latest()->limit(5)->get();

    return view('newsmany',compact('newsmany','news'));
}
}
