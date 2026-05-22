<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['id' => 1, 'name' => 'Product 1'],
            ['id' => 2, 'name' => 'Product 2'],
            ['id' => 3, 'name' => 'Product 3'],
        ];

        return view('products.index', [
            'products' => $products,
        ]);
    }

    public function show($id)
    {
        return view('products.show', [
            'id' => $id,
        ]);
    }
}
