<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;


Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/contact', [PagesController::class, 'contact']);

Route::get('/{name1}/{name2}', function($name1, $name2){
    return $name1.' va '.$name2;
})





//---------- Tilni o'rnatish uchun route --------------
Route::get('/language/{lang}', function($lang){
    if($lang == 'uz' or $lang == 'ru' or $lang == 'en')
        session()->put('locale', $lang);
    return redirect()->back();
});
//-----------------------------------------------------