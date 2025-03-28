<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\CarType;
use App\Models\Maker;
use App\Models\Model;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
  

    public function index(){
      /*   $cars=CarType::get();
        dump($cars); */

       /*  $car=new Car();
        $car->maker_id=1;
        $car->model_id=1;
        $car->year="2119";
        $car->price=5000;
        $car->vin=123;
        $car->mileage=13;
        $car->car_type_id=3;
        $car->user_id=1;
        $car->city_id=3;
        $car->address="shegole";
        $car->description=null;
        $car->phone="0900729229";
        $car->published_at=now();

        $car->save(); */

        $cars=[
	"maker_id"=> 1,
	"model_id"	=>2,
	"year"	=>"2020",
	"price"	=>8000,
	"vin"=>1234,
	"mileage"=>1234,
	"car_type_id"=>2,
	"user_id"=>1,
	"city_id"=>2,
	"address"=>"test",
	"description" =>null,
	"phone"	=>"0900729339",
	"published_at"=>now(),
        ];
        $car=new Car($cars);
        $car->save();
      
        return view('home.index');
    }
}
