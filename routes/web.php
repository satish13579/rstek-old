<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\HiringController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth'])->group(function() {
    Route::get('/home', [HomeController::class, 'index'])->name('admin.index');
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::prefix('jobs')->group(function () {
        Route::get('/', [JobController::class, 'index'])->name('jobs.index');
        Route::get('/create', [JobController::class, 'create'])->name('jobs.create');
        Route::post('/create', [JobController::class, 'store'])->name('jobs.store');
        Route::get('/edit/{job}', [JobController::class, 'edit'])->name('jobs.edit');
        Route::put('edit/{job}', [JobController::class, 'update'])->name('jobs.update');
        Route::delete('/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');
    });

    Route::prefix('contacts')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('contacts.index');
        Route::get('/view/{contact}', [ContactController::class, 'view'])->name('contact.view');
        Route::post('/download', [ContactController::class, 'download'])->name('contact.download');
    });

    Route::prefix('solutions')->group(function () {
        Route::get('/', [SolutionController::class, 'index'])->name('solutions.index');
        Route::get('/view/{solution}', [SolutionController::class, 'view'])->name('solution.view');
        Route::post('/download', [SolutionController::class, 'download'])->name('solution.download');
    });

    Route::prefix('marketings')->group(function () {
        Route::get('/', [MarketingController::class, 'index'])->name('marketings.index');
        Route::get('/view/{marketing}', [MarketingController::class, 'view'])->name('marketing.view');
        Route::post('/download', [MarketingController::class, 'download'])->name('marketing.download');
    });

    Route::prefix('hirings')->group(function () {
        Route::get('/', [HiringController::class, 'index'])->name('hirings.index');
        Route::get('/view/{hiring}', [HiringController::class, 'view'])->name('hiring.view');
        Route::post('/download', [HiringController::class, 'download'])->name('hiring.download');
    });
});

Route::middleware(['guest'])->group(function() {

    Route::get('/', [WebsiteController::class, 'home'])->name('website.home');
    Route::get('/about', [WebsiteController::class, 'about'])->name('website.about');
    Route::get('/contact', [WebsiteController::class, 'contact'])->name('website.contact');
    Route::post('/contact', [WebsiteController::class, 'saveContact'])->name('website.contact.store');
    Route::get('/partner-with-us', [WebsiteController::class, 'partnership'])->name('website.partnership');
    Route::prefix('solutions')->group(function () {
        Route::get('/ui-testing', [WebsiteController::class, 'uiTesting'])->name('website.ui-testing');
        Route::get('/mobile-testing', [WebsiteController::class, 'mobileTesting'])->name('website.mobile-testing');
        Route::get('/performance-testing', [WebsiteController::class, 'performanceTesting'])->name('website.performance-testing');
        Route::get('/api-testing', [WebsiteController::class, 'apiTesting'])->name('website.api-testing');
        Route::get('/test-plan', [WebsiteController::class, 'testPlan'])->name('website.test-plan');
    });
    Route::prefix('form')->group(function () {
        Route::get('/solution', [WebsiteController::class, 'solutionForm'])->name('website.forms.solution-form');
        Route::post('/solution', [WebsiteController::class, 'saveSolutionForm'])->name('website.forms.save-solution-form');
        Route::get('/marketing', [WebsiteController::class, 'marketingForm'])->name('website.forms.marketing-form');
        Route::get('/hiring', [WebsiteController::class, 'hiringForm'])->name('website.forms.hiring-form');
    });
    Route::prefix('services')->group(function () {
        Route::get('/test-solutions', [WebsiteController::class, 'testSolutions'])->name('website.test-solutions');
        Route::get('/talent-hiring', [WebsiteController::class, 'talentHiring'])->name('website.talent-hiring');
        Route::get('/market-yourself', [WebsiteController::class, 'marketYourself'])->name('website.market-yourself');
        Route::get('/qa-training', [WebsiteController::class, 'qaTraining'])->name('website.qa-training');
    });
    Route::get('/career', [WebsiteController::class, 'career'])->name('website.career');
    Route::get('/submission-guidelines', [WebsiteController::class, 'submissionGuidelines'])->name('website.submission-guidelines');
    Route::get('/editorial-policy', [WebsiteController::class, 'editorialPolicy'])->name('website.editorial-policy');

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'createUser'])->name('register');

    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate'])->name('login');
});
