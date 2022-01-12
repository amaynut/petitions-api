<?php

use App\Http\Controllers\PetitionController;
use App\Http\Controllers\AuthorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// map all the controller methods (resources) to an endpoint
Route::apiResource('/petitions', PetitionController::class);

// map specific resources
/*
Route::resource('/petitions', PetitionController::class)->only(
    ['index', 'store']
);
*/
// map one resource at a time
//Route::get('petitions' , [PetitionController::class, 'index']);

// ---------- Author resource ------
Route::resource('/authors', AuthorController::class)->only(
    [
        'index', // get all authors
        'show' // get a specific author
    ]
);
