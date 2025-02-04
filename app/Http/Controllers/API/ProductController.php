<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Creamos un arreglo de productos “fake”
        $products = [
            new Product(1, 'Laptop', 1200.00, 10),
            new Product(2, 'Smartphone', 800.00, 25),
            new Product(3, 'Mouse', 20.00, 100),
        ];

        // Retornamos JSON
        return response()->json($products);
    }
}

