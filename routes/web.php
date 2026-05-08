<?php

use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\LoginController;
use App\Models\Article;
use App\Models\Comment;
use App\Models\Profile;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $projects = Project::where('is_published', true)->latest()->take(6)->get();
    return view('welcome', compact('projects'));
})->name('home');

Route::get('/projects', function () {
    $projects = Project::where('is_published', true)->latest()->get();
    return view('projects', compact('projects'));
})->name('projects.index');

Route::get('/mybio', function () {
    $profile = Profile::first();
    $projects = Project::where('is_published', true)->latest()->get();
    $articles = Article::where('is_published', true)->latest()->get();

    return view('mybio', compact('profile', 'projects', 'articles'));
})->name('mybio');

Route::get('/articles/{slug}', function ($slug) {
    $article = Article::where('slug', $slug)->where('is_published', true)->firstOrFail();
    $profile = Profile::first();
    $relatedArticles = Article::where('is_published', true)
        ->where('id', '!=', $article->id)
        ->latest()
        ->take(5)
        ->get();

    return view('articles.show', compact('article', 'relatedArticles', 'profile'));
})->name('articles.show');

// Comment Route
Route::post('/articles/{article}/comments', function (Request $request, Article $article) {
    if (!Auth::check()) {
        return redirect()->back()->with('error', 'You must be logged in to comment.');
    }

    $request->validate([
        'content' => 'required|min:3',
    ]);

    $article->comments()->create([
        'user_id' => Auth::id(),
        'content' => $request->content,
    ]);

    return redirect()->back()->with('success', 'Comment added!');
})->name('comments.store');

// Email/Password Auth Routes
Route::get('login', [LoginController::class, 'show'])->name('login');
Route::post('login', [LoginController::class, 'store'])->name('login.store');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Google Auth Routes
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
