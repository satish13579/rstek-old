<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

// use App\Http\Resources\SolutionResource;
// use App\Models\Solution;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/solutions', function () {
//     return new SolutionResource(Solution::all());
// })->name('website.forms.get-solution-form');

// Route::get('/solutions', [WebsiteController::class, 'getAllSolutions'])->name('website.forms.get-solution-form');



// Route::post('/solution', [WebsiteController::class, 'saveSolutionForm'])->name('website.forms.save-solution-form');
Route::prefix('form')->group(function () {
    Route::post('/marketing', [WebsiteController::class, 'saveMarketingForm'])->name('website.forms.save-marketing-form');
    Route::post('/hiring', [WebsiteController::class, 'saveHiringForm'])->name('website.forms.save-hiring-form');
});
