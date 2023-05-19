<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\InfoMail;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index()
    {
        return view('homepage');
    }

    public function contact()
    {
        return view('contatti');
    }


    public function corsi()
    {
        $course = [
            [
                'name' => 'Crossfit',
                "room" => 2,
                "slug"=>'Crossfit',
                "tools" => "step",
                "time" => "15:30",
                "image" => 'https://media.gettyimages.com/id/503416862/it/foto/palestra-allenamento-fitness-uomo-pronto-per-lallenamento-con-kettlebell.jpg?s=612x612&w=0&k=20&c=Aiw7eTsPv3xS6QGLKWTDT5O62XzGKfY4L3fekebHSEc='
            ],

            [
                'name' => 'Yoga',
                "slug"=>'Yoga',
                "room" => 8,
                "tools" => "bilanciere",
                "time" => "11:30",
                "image" => 'https://www.assigigliorosso.it/wp-content/uploads/2022/12/anupam-mahapatra-Vz0RbclzG_w-unsplash-scaled.jpg'
            ],

            [
                'name' => 'Functional',
                "slug"=>'Functional',
                "room" => 3,
                "tools" => "manubri",
                "time" => "7:30",
                "image" => 'https://www.assigigliorosso.it/wp-content/uploads/2022/12/Supplement-Fitness.jpg'
            ],
        ];

        return view('corsi', ['gym' => $course]);
    }




   
      public static  $corsi = [
            'primocorso'=>[
            [
                'name' => 'Crossfit',
                "slug"=>'Crossfit',
                "room" => 2,
                "tools" => "step",
                "time" => "15:30",
                "image" => 'https://media.gettyimages.com/id/503416862/it/foto/palestra-allenamento-fitness-uomo-pronto-per-lallenamento-con-kettlebell.jpg?s=612x612&w=0&k=20&c=Aiw7eTsPv3xS6QGLKWTDT5O62XzGKfY4L3fekebHSEc='
            ]],
            'secondocorso'=>[
            [
                'name' => 'Yoga',
                'slug'=>'Yoga',
                "room" => 8,
                "tools" => "bilanciere",
                "time" => "11:30",
                "image" => 'https://www.assigigliorosso.it/wp-content/uploads/2022/12/anupam-mahapatra-Vz0RbclzG_w-unsplash-scaled.jpg'
            ]],
            'terzocorso'=>[
            [
                'name' => 'Functional',
                'slug'=>'Functional',
                "room" => 3,
                "tools" => "manubri",
                "time" => "7:30",
                "image" => 'https://www.assigigliorosso.it/wp-content/uploads/2022/12/Supplement-Fitness.jpg'
            ]],
        ];
      
        public function corsivisibili(){
            return view('corsi', ['corsi'=>self::$corsi]);
           }
        
           public function dettagli($ref){
              
              foreach(self::$corsi as $corso){
        
                 if($ref == $corso['slug']){
                    return view('detail', ['corso'=>$corso]);
                 }
              }
              abort(404);
           }
        



    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        $data = [
            "name" => $request->name,
            "email" => $request->input('email'),
            "telephone" => $request->telephone,
            "message" => $request->message,

        ];
       // dd($data) per vedere se funziona mi prende il dd con i dati corretti;

        return redirect()->route('homepage');
    }
}
