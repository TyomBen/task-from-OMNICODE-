<?php

use App\Http\Controllers\CreateChildCommentController;
use App\Http\Controllers\CreateCommentController;
use App\Http\Controllers\ShowCommentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ShowCommentController::class, 'index'])
->name('comments');

Route::post('create/comment', [CreateCommentController::class,'create'])
->name('create/comment');

Route::get('create/child/{comment}', [CreateChildCommentController::class, 'create'])
->name('create/child');

Route::post('store/child/{comment}', [CreateChildCommentController::class, 'store'])
->name('comment/child/create/success');
