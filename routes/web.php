<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/shop', [ProductController::class, 'index']);

use App\Models\Product;

Route::get('/add-test', function () {
    $p = new Product();
    $p->name = 'Шоколадка';
    $p->price = 99.90;
    $p->save();

    return "Товар 'Шоколадка' успешно добавлен в базу!";
});