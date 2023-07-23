<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

include base_path("app/Domains/Trip/routes/api.php");

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('simple', function () {
    dd(\App\Domains\Trip\Service\TripLocationHelper::checkLocation(
        \App\Domains\Location\Model\City::find(1)->coordinates,
        34.631614
        ,50.878515
    ));
});
