<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    //
    protected $fillable = [
    "maker_id" ,
	"model_id",
	"year"	,
	"price",
	"vin",
	"mileage",
	"car_type_id",
	"user_id",
	"city_id",
	"address",
	"description",
	"phone",
	"published_at",

    ];
    use HasFactory,SoftDeletes;
}
