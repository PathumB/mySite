<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotFoundPageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PortfolioController;

// 404 page
Route::fallback([NotFoundPageController::class, 'index']);

Route::redirect('/', '/home');
Route::resource('home', HomeController::class)->only(['index']);
Route::resource('about-us', AboutController::class)->only(['index']);
Route::resource('contact-us', ContactController::class)->only(['index']);

Route::resource('our-services', ServiceController::class)->only(['index']);
Route::get('our-services/web-design', [ServiceController::class, 'webDesign'])->name('ourServices.webDesign');
Route::get('our-services/mobile-app-development', [ServiceController::class, 'mobileAppDevelopment'])->name('ourServices.mobileAppDevelopment');
Route::get('our-services/ui-ux-design', [ServiceController::class, 'uiUxDesign'])->name('ourServices.uiUxDesign');
Route::get('our-services/graphic-design', [ServiceController::class, 'graphicDesign'])->name('ourServices.graphicDesign');

Route::resource('our-portfolio', PortfolioController::class)->only(['index']);
Route::get('our-portfolio/disonsconstruction', [PortfolioController::class, 'disonsconstruction'])->name('ourPortfolio.disonsconstruction');
Route::get('our-portfolio/dragonsof', [PortfolioController::class, 'dragonsof'])->name('ourPortfolio.dragonsof');
Route::get('our-portfolio/econsulate', [PortfolioController::class, 'econsulate'])->name('ourPortfolio.econsulate');
Route::get('our-portfolio/hcm', [PortfolioController::class, 'hcm'])->name('ourPortfolio.hcm');
Route::get('our-portfolio/estai', [PortfolioController::class, 'estai'])->name('ourPortfolio.estai');
Route::get('our-portfolio/tropi', [PortfolioController::class, 'tropi'])->name('ourPortfolio.tropi');
