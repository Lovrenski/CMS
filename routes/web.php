<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SuggestionController;
use App\Http\Controllers\ConfigurationController;

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

// Visitors
Route::controller(VisitorController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/content/{slug}', 'detail');
    Route::get('/galleries', 'galleries');
    Route::get('/about', 'about');
    Route::get('/contact', 'contact');
    Route::post('/suggest/add', 'addSuggest');
});

// Auth
Route::middleware(['guest'])->group(function () {
    Route::controller(SessionController::class)->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::post('/auth', 'auth');
    });
});

Route::middleware(['auth'])->group(function () {

    // Admin
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin', 'index')->name('admin');

        // Manage Admin
        Route::get('/admin/manage-admin', 'manageAdmin');
        Route::get('/admin/add-admin', 'addAdmin');
        Route::post('/admin/tambah-admin', 'tambahAdmin');
        Route::post('/admin/delete-admin/{id}', 'deleteAdmin');

        // Manage Contributor
        Route::get('/admin/manage-contributor', 'manageContributor');
        Route::get('/admin/add-contributor', 'addContributor');
        Route::post('/admin/tambah-contributor', 'tambahContributor');
        Route::post('/admin/delete-contributor/{id}', 'deleteContributor');
    });

    // Manage Carousels
    Route::controller(CarouselController::class)->group(function () {
        Route::get('/admin/carousels', 'index');
        Route::get('/admin/add-carousel', 'create');
        Route::post('/admin/tambah-carousel', 'store');
        Route::get('/admin/edit-carousel/{id}', 'edit');
        Route::post('/admin/update-carousel/{id}', 'update');
        Route::get('/admin/carousel/{carousel}', 'destroy');
    });

    //Manage Contents
    Route::controller(ContentController::class)->group(function () {
        Route::get('/admin/contents', 'index');
        Route::get('/admin/add-content', 'create');
        Route::get('/admin/show-content/{slug}', 'show');
        Route::post('/admin/tambah-content', 'store');
        Route::get('/admin/edit-content/{id}', 'edit');
        Route::post('/admin/update-content/{id}', 'update');
        Route::post('/admin/delete-content/{id}', 'destroy');
    });

    // Manage Configuration
    Route::controller(ConfigurationController::class)->group(function () {
        Route::get('/admin/config', 'index');
        Route::post('/admin/tambah-config', 'store');
        Route::post('/admin/update-config', 'update');
    });

    // Manage Categories
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/admin/categories', 'index');
        Route::get('/admin/add-category', 'create');
        Route::post('/admin/tambah-category', 'store');
        Route::get('/admin/edit-category/{id}', 'edit');
        Route::post('/admin/update-category/{id}', 'update');
        Route::post('/admin/delete-category/{id}', 'destroy');
    });

    // Manage Galleries
    Route::controller(GalleryController::class)->group(function () {
        Route::get('/admin/galleries', 'index');
        Route::get('/admin/add-gallery', 'create');
        Route::post('/admin/tambah-gallery', 'store');
    });

    Route::controller(SuggestionController::class)->group(function () {
        Route::get('/admin/suggestions', 'index');
        Route::post('/admin/suggest-delete/{id}', 'destroy');
    });

    // Session Destroy
    Route::get('/logout', [SessionController::class, 'logout']);
});
