<?php
use App\Http\Controllers\WhyController;
use App\Http\Controllers\AmenityController;
use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GalleryController;

use App\Http\Controllers\ContentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DeveloperController;


use App\Http\Controllers\AuthController;

use App\Http\Controllers\FaqController;
use App\Http\Controllers\PropertyController;


Route::get('/banner', [BannerController::class, 'index'])->name('banner.index');
Route::get('/banner/create', [BannerController::class, 'create'])->name('banner.create');
Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');
Route::get('/banner/show', [BannerController::class, 'show'])->name('banner.show');
Route::delete('/banner/{id}', [BannerController::class, 'destroy'])->name('banner.destroy');


Route::get('/properties', [PropertyController::class, 'index'])->name('properties.index');
Route::get('/properties/create', [PropertyController::class, 'create'])->name('properties.create');
Route::post('/properties/store', [PropertyController::class, 'store'])->name('properties.store');
Route::get('/properties/view', [PropertyController::class, 'show']);
Route::Delete('/properties/{id}', [PropertyController::class, 'destroy'])->name("properties.destroy");



Route::get('/faq/create', [FaqController::class, 'create'])->name('faq.create');
Route::post('/faq/store', [FaqController::class, 'store'])->name('faq.store');
Route::get('/faq/view', [FaqController::class, 'show'])->name('faq.index');
Route::get('/faq', [FaqController::class, 'index'])->name('faq.index');
Route::Delete('/faq/{id}', [FaqController::class, 'destroy'])->name('faq.destroy');

Route::post('/faq/store', [FaqController::class, 'store'])->name('faq.store');
Route::get('/why/create', [WhyController::class, 'create'])->name('why.create'); // Show form
Route::post('/why-section/store', [WhyController::class, 'store'])->name('why.store'); // Handle form submission

Route::get('/why/show', [WhyController::class, 'show'])->name('show'); // Show form
Route::Delete('/why/{id}', [WhyController::class, 'destroy'])->name('why.destroy'); // Handle form submission


Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/index', [IndexController::class, 'index'])->name('home');

Route::get('/pages', [PagesController::class, 'index'])->name('page');
Route::get('/pages/create', [PagesController::class, 'index'])->name('pages.create');
Route::post('/pages/store', [PagesController::class, 'store'])->name('pages.store');
Route::get('/pages/show', [PagesController::class, 'show'])->name('pages.show');
Route::delete('/pages/{id}', [PagesController::class, 'destroy'])->name('pages.destroy');








Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
Route::post('/gallery', [GalleryController::class, 'store'])->name('gallery.store');

Route::get('/gallery/show', [GalleryController::class, 'show'])->name('gallery.show');
Route::delete('/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');


Route::get('/content/create', [ContentController::class, 'create'])->name('content.create');
Route::post('/content/store', [ContentController::class, 'store'])->name('content.store');
Route::get('/content/view', [ContentController::class, 'show']);
Route::Delete('/content/{id}', [ContentController::class, 'destroy'])->name("content.destroy");



Route::get('/developer/create', [DeveloperController::class, 'create'])->name('developer.create');
Route::post('/developer/store', [DeveloperController::class, 'store'])->name('developer.store');
Route::get('/developer/show', [DeveloperController::class, 'show'])->name('developer.show');

Route::delete('/developer/{id}', [DeveloperController::class, 'destroy'])->name('developer.destroy');
Route::delete('/developer/{id}', [DeveloperController::class, 'destroy'])->name('developers.destroy');


Route::get('/banner', [BannerController::class, 'create'])->name('banner.create');
Route::post('/banner/store', [BannerController::class, 'store'])->name('banner.store');

Route::get('/amenities/create', [ AmenityController ::class, 'create'])->name('amenities.create');
Route::post('/amenities/store', [AmenityController::class, 'store'])->name('amenities.store');
Route::get('/amenities/show', [AmenityController::class, 'show'])->name('amenities.show');
Route::delete('/amenities/{id}', [AmenityController::class, 'destroy'])->name('amenities.destroy');

