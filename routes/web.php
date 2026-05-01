<?php

use App\Models\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = Project::where('is_published', true)->latest()->take(6)->get();
    return view('welcome', compact('projects'));
})->name('home');

Route::get('/projects', function () {
    $projects = Project::where('is_published', true)->latest()->get();
    return view('projects', compact('projects'));
})->name('projects.index');
