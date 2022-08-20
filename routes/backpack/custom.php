<?php

use Illuminate\Support\Facades\Route;

// --------------------------
// Custom Backpack Routes
// --------------------------
// This route file is loaded automatically by Backpack\Base.
// Routes you generate using Backpack\Generators will be placed here.

Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => array_merge(
        (array) config('backpack.base.web_middleware', 'web'),
        (array) config('backpack.base.middleware_key', 'admin')
    ),
    'namespace'  => 'App\Http\Controllers\Admin',
], function () { // custom admin routes

    Route::get('prueba-vue', function (){
    return \Inertia\Inertia::render('prueba');
    });
    Route::get('clientes', function (){
    return \Inertia\Inertia::render('clientes');
    });
    Route::get('cliente-direcciones', function (){
    return \Inertia\Inertia::render('cliente_direcciones');
    });
    Route::get('grupo-clientes', function (){
    return \Inertia\Inertia::render('grupo_clientes');
    });
    Route::get('paises', function (){
    return \Inertia\Inertia::render('paises');
    });
    Route::get('estados_list', function (){
    return \Inertia\Inertia::render('estados_list');

    });Route::get('estados', function (){
    return \Inertia\Inertia::render('estados');
    });
    Route::get('municipios', function (){
    return \Inertia\Inertia::render('municipios');
    });
    Route::get('paises_list', function (){
    return \Inertia\Inertia::render('paises_list');
    });

}); // this should be the absolute last line of this file
