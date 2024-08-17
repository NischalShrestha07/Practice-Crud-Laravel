<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route as FacadesRoute;

route::get('/', function () {
    return view('welcome');
});

FacadesRoute::resource('products', ProductController::class);
