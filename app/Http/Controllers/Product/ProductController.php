<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateProductRequest;
use App\Models\Product;
use App\Services\ProductService;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.list')->with([
            'products' => Product::getAvailableProducts()
        ]);
    }

    public function info(int $id)
    {
        return view('products.info')
            ->with([
                'product' => Product::query()->find($id),
            ]);
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(CreateProductRequest $request)
    {
        return ProductService::create($request->all())
            ? redirect()->route('products.list')
            : dd(111);
    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function destroy()
    {

    }
}
