<?php

use App\Http\Controllers\API\V1\CollaborationProjectController;
use App\Http\Controllers\API\V1\ContactController;
use App\Http\Controllers\API\V1\HomepageBannerController;
use App\Http\Controllers\API\V1\PortfolioProjectController;
use App\Http\Controllers\API\V1\SectionStylesController;
use App\Http\Controllers\API\V1\CollaborationBannerController;
use App\Http\Controllers\API\V1\EditorialCareouselSectionController;
use App\Http\Controllers\API\V1\PortfolioBannerController;
use App\Http\Controllers\API\V1\SectionAboutController;
use App\Http\Controllers\API\V1\SectionBehindTheBrandAccordionController;
use App\Http\Controllers\API\V1\SectionBehindTheBrandImageController;
use App\Http\Controllers\API\V1\SectionServiceController;
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
use Illuminate\Support\Facades\Mail;

Route::get('/test-email-basic', function () {
    try {
        Mail::raw('This is a test email.', function ($message) {
            $message->to('najatt.ismail@gmail.com')
                    ->subject('Test Email');
        });

        return 'Basic email sent successfully.';
    } catch (\Exception $e) {
        return 'Failed to send email: ' . $e->getMessage();
    }
});

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

Route::get('portfolio-banner', [PortfolioBannerController::class, 'index']);
Route::get('portfolio-banner/featured', [PortfolioBannerController::class, 'getFeatured']);

Route::get('collaboration-banner', [CollaborationBannerController::class, 'index']);
Route::get('collaboration-banner/featured', [CollaborationBannerController::class, 'getFeatured']);

Route::get('styles-section', [SectionStylesController::class, 'index']);
Route::get('styles-section/featured', [SectionStylesController::class, 'getFeatured']);

Route::get('editorial-carousel-section', [EditorialCareouselSectionController::class, 'index']);
Route::get('editorial-carousel-section/featured', [EditorialCareouselSectionController::class, 'getFeatured']);

Route::get('services-section', [SectionServiceController::class, 'index']);
Route::get('services-section/featured', [SectionServiceController::class, 'getFeatured']);

Route::get('accordion-section', [SectionBehindTheBrandAccordionController::class, 'index']);
Route::get('accordion-section/featured', [SectionBehindTheBrandAccordionController::class, 'getFeatured']);

Route::get('accordion-section-image', [SectionBehindTheBrandImageController::class, 'index']);
Route::get('accordion-section-image/featured', [SectionBehindTheBrandImageController::class, 'getFeatured']);

Route::get('about-section', [SectionAboutController::class, 'index']);
Route::get('about-section/featured', [SectionAboutController::class, 'getFeatured']);
