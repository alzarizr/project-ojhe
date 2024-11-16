<?php

use Illuminate\Support\Facades\Route;

//route user

Route::get('/', function () {
    return view('user.index');
})->name('home');

Route::get('/about', function () {
    return view('user.about');
})->name('about');

Route::get('/services', function () {
    return view('user.services');
})->name('service');

Route::get('/project', function () {
    return view('user.project');
})->name('project');

Route::get('/article', function () {
    return view('user.article');
})->name('article');

Route::get('/article/detail-article', function () {
    return view('user.articleDetail');
})->name('articleDetail');

Route::get('/contact', function () {
    return view('user.contact');
})->name('contact');


//Route Middleware Login

Route::get('/login', function () {
    return view('admin.auth.login');
})->name('login');

//Route Admin

Route::get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/form', function () {
    return view('admin.form');
})->name('form');

Route::get('/form-advanced', function () {
    return view('admin.formAdvanced');
})->name('formAdvanced');

Route::get('/form-validation', function () {
    return view('admin.formValidation');
})->name('formValidation');

Route::get('/form-wizard', function () {
    return view('admin.formWizard');
})->name('formWizard');

Route::get('/form-upload', function () {
    return view('admin.formUpload');
})->name('formUpload');

Route::get('/form-buttons', function () {
    return view('admin.formButtons');
})->name('formButtons');

Route::get('/general-elements', function () {
    return view('admin.generalElements');
})->name('generalElements');

Route::get('/media-gallery', function () {
    return view('admin.mediaGallery');
})->name('mediaGallery');

Route::get('/typhography', function () {
    return view('admin.typhography');
})->name('typhography');

Route::get('/icons', function () {
    return view('admin.icons');
})->name('icons');

Route::get('/glyphicons', function () {
    return view('admin.glyphicons');
})->name('glyphicons');

Route::get('/widgets', function () {
    return view('admin.widgets');
})->name('widgets');

Route::get('/invoice', function () {
    return view('admin.invoice');
})->name('invoice');

Route::get('/inbox', function () {
    return view('admin.inbox');
})->name('inbox');

Route::get('/calender', function () {
    return view('admin.calender');
})->name('calender');

Route::get('/tables', function () {
    return view('admin.tables');
})->name('tables');

Route::get('/tables-dyanamic', function () {
    return view('admin.tablesDynamic');
})->name('tablesDynamic');

Route::get('/chart-js', function () {
    return view('admin.chartjs');
})->name('chartjs');

Route::get('/chart-js2', function () {
    return view('admin.chartjs2');
})->name('chartjs2');

Route::get('/moris-js', function () {
    return view('admin.morisjs');
})->name('morisjs');

Route::get('/e-chart-js', function () {
    return view('admin.eChart');
})->name('eChart');

Route::get('/chart-js', function () {
    return view('admin.chartjs');
})->name('chartjs');

Route::get('/other-chart-js', function () {
    return view('admin.otherChart');
})->name('otherChart');

Route::get('/fixed-sidebar', function () {
    return view('admin.fixedSidebar');
})->name('fixedSidebar');

Route::get('/fixed-footer', function () {
    return view('admin.fixedFooter');
})->name('fixedFooter');

Route::get('/e-commerce', function () {
    return view('admin.eCommerce');
})->name('eCommerce');

Route::get('/projects', function () {
    return view('admin.projects');
})->name('projects');

Route::get('/projects-detail', function () {
    return view('admin.projectDetail');
})->name('projectDetail');

Route::get('/contacts', function () {
    return view('admin.contacts');
})->name('contacts');

Route::get('/profile', function () {
    return view('admin.profile');
})->name('profile');

Route::get('/page-403-error', function () {
    return view('admin.error.page403');
})->name('page403');

Route::get('/level-2', function () {
    return view('admin.level2');
})->name('level2');
