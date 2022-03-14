<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MarketingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProdutcController;
use Illuminate\Support\Facades\Route;

use App\Models\Product;


Route::get('/' , [EventController::class , 'home']);

Route::get('/produto/{slug}' , [EventController::class , 'produto']);

Route::get('/categoria' , [CategoryController::class , 'index']);

Route::get('/categoria/create' , [CategoryController::class , 'create']);

Route::post('categoria/store' , [CategoryController::class , 'store']);

Route::get('categoria/update/{id}' , [CategoryController::class , 'show']);

Route::put('categoria/atualizar/{id}' , [CategoryController::class , "update"]);

Route::get('categoria/delete/{id}' , [CategoryController::class , "destroy"]);

Route::get('/produtos' , [ProductController::class , 'index']);

Route::get('/produtos/create' , [ProductController::class , 'create']);

Route::post('/produtos/store' , [ProductController::class , 'store']);

Route::get('/produtos/update/{id}' , [ProductController::class , 'show']);

Route::put('/produtos/atualizar/{id}' , [ProductController::class , 'update']);

Route::get('/produtos/destroy/{id}' , [ProductController::class , 'destroy']);

Route::get('/marketing/captura' , [MarketingController::class , 'index']);

Route::post('/marketing/store' , [MarketingController::class , 'store']);

Route::get('/marketing/enviar' , [MarketingController::class , 'envia']);

Route::post('/assinar' , [MarketingController::class , 'assinar']);

Route::get('/sair' , function(){
 
    return view('dashboard' );
} );

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin/dashboard');
})->name('dashboard');
