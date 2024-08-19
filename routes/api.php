<?php

use App\Http\Controllers\API\V1\CollaborationProjectController;
use App\Http\Controllers\API\V1\ContactController;
use App\Http\Controllers\API\V1\HomepageBannerController;
use App\Http\Controllers\API\V1\PortfolioProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('contact_submissions', [ContactController::class, 'store']);
Route::get('contact', [ContactController::class, 'index']);

Route::get('portfolio-projects', [PortfolioProjectController::class, 'index']);
Route::get('portfolio-projects/{slug}', [PortfolioProjectController::class, 'getBySlug']);

Route::get('collaboration-projects', [CollaborationProjectController::class, 'index']);
Route::get('collaboration-projects/{slug}', [CollaborationProjectController::class, 'getBySlug']);

Route::get('homepage-banner', [HomepageBannerController::class, 'index']);
Route::get('homepage-banner/featured', [HomepageBannerController::class, 'getFeatured']);
