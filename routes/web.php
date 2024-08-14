<?php

use App\Http\Controllers\ProductController;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route as FacadesRoute;

// Route::get('/',[])
FacadesRoute::resource('products', ProductController::class);
