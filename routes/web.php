<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

Route::view('/about', 'pages.about')->name('about');

Route::view('/services', 'pages.services')->name('services');

Route::view('/packages', 'pages.packages')->name('packages');

Route::view('/gallery', 'pages.gallery')->name('gallery');

Route::view('/review', 'pages.review')->name('review');

Route::view('/contact', 'pages.contact')->name('contact');
