<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('inicio');
});

Auth::routes();

/*Route::get('/{any}', function () {
    return view('menu');
})->where('any', '.*');*/


Route::middleware(['auth'])->group(function () {
    
    Route::get('/home', function () {
        return view('partials.menu.historial');
    });

    Route::get('/home1', function () {
        return view('home');
    });

    Route::get('/historial', function () {
        return view('partials.menu.historial');
    });

    Route::post('/historial', function () {
        return view('partials.menu.historial');
    });
    
    Route::get('/about', function () {
        return view('partials.about');
    });
    
    Route::get('/agregar', function () {
        return view('partials.menu.add');
    });


    Route::get('/inventario', [ProductController::class, 'find'])->name('find');
    Route::post('/inventario', [ProductController::class, 'find'])->name('find');
    Route::post('/facturar', [ProductController::class, 'find_sell'])->name('find_sell');
    Route::get('/facturar', [ProductController::class, 'find_sell'])->name('find_sell');

    Route::post('/agregar', [ProductController::class, 'create'])->name('create');
    Route::post('/eliminarp', [ProductController::class, 'delete'])->name('delete');
    Route::post('/editar', [ProductController::class, 'editar'])->name('editar');

    Route::get('/comprar', [ProductController::class, 'find_all'])->name('find_all');
    Route::post('/comprar', [ProductController::class, 'find_all'])->name('find_all');

    Route::get('/carrito', function () {
        return view('partials.compra.carrito');
    });

    Route::get('/compra', function () {
        return view('partials.compra.confimar');
    });

});
