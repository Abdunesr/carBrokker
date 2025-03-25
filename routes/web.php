<?php

/* use App\Http\Controllers\calculatorController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\carControllers;
use App\Http\Controllers\productController;
use App\Http\Controllers\showCarController; */
use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signupController;
use Illuminate\Support\Facades\Route;




Route::get("/",[HomeController::class,'index'])->name('home');
Route::get('/signup',[signupController::class,'create']);
Route::get('/login',[loginController::class,'create']);

















/* Route::get('/', function () {
    return view('welcome');
});

Route::view('/about','about')->name('about');

Route::get('{lang}/product/{id}/review/{reviewId}',function(string $lang,string $id,string $reviewId){

    return "MY product ={$lang}";
}); */
/* Route::get('/product/{category?}',function(string $category='null'){
    return "MYproduct={$category}";

})->whereNumber('category');
 */

/* Route::get('/user/{username}',function(string $username){
    $aboutPageUrl=route('about');
    dump($aboutPageUrl);
    return "MYproduct={$username}";


})->whereAlphaNumeric('category'); */

/* Route::get('{lang}/products',function(string $lang){
    return "MYproduct={$lang}";

})->whereIn('lang',['en','fr','am','tr']);

 */
/* Route::get('/user/profile',function(){
    return "Hello user";
})->name('profile');
Route::get('/current-user',function(){
   return redirect()->route('profile'); 
  return to_route(('profile'));
}); */

/* Route::prefix('admin')->group(function(){
    Route::get('/users',function(){
        return "this is the users page admin/users "; 
        return redirect()->route('admin.photo'); 
    });



}); */
/*
Route::name('admin.')->group(function(){
    Route::get('/photo',function(){
        return "this is the photo page but the name us admin.photo";

    })->name('photo');

}); 
Route::fallback(function(){
    return "page not found 404 ";
});
Route::get('/cars', [carControllers::class, 'index']);
Route::get('/cars/invokable',carControllers::class); */



/* Route::resource('products',productController::class)->only(['destroy','edit']); 
Route::resource('cars',CarController::class);

Route::resources(['cars'=> CarController::class,'products'=> ProductController::class]);


Route::get('/sum/{x}/{y}',[calculatorController::class,'sum'],)->whereNumber(['x','y']);

Route::get('substruct',[calculatorController::class,'substruct']);
*/