<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public $corsi = [
        'Pancafit' => [
            "room" => 2,
            "tools" => "panca",
            "time" => "15:30",
            "image"=>'https://media.gettyimages.com/id/503416862/it/foto/palestra-allenamento-fitness-uomo-pronto-per-lallenamento-con-kettlebell.jpg?s=612x612&w=0&k=20&c=Aiw7eTsPv3xS6QGLKWTDT5O62XzGKfY4L3fekebHSEc='
        ],

        'Bodypump' => [
            "room" => 8,
            "tools" => "bilanciere",
            "time" => "11:30"
        ],
    ];



    public function index()
    {
        return view('homepage');
    }




    public function course()
    {
        return view('corsi');
    }

    public function contact()
    {
        return view('contatti');
    }


    public function form()
    {
        return view('contatti');
    }

public function send(Request $request){
    $request->validate([
        "name" => "required|string",
        "email" => "required|email",
        "message" => "required|min:10",
    ]);
    $data = [
        "name" => $request->name,
        "email" => $request->input('email'),
        "telephone" => $request->telephone,
        "message" => $request->message,
    ];

    dd($request);


    return redirect()->route('homepage');
   
   
}



}
