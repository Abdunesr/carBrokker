<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index(){
        return view('home.index',['name'=> 'Abdelah',
                                              'surname'=>'Nesredin',
                                              'job' => '<b>Developer</b>',
                                            'hobbies' => ['Football','Tenis'],
                                        'country'=>'ET',]);
    }
}
