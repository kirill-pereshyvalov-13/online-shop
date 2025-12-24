<?php

namespace App\Http\Controllers;

use App\Models\Product; // Подключаем модель
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        // Раньше тут был массив, а теперь мы берем ВСЕ товары из базы данных
        $products = Product::all(); 
        
        return view('welcome_page', ['items' => $products]);
    }
}