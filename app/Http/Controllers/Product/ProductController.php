<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\CreateProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

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

    public function edit(int $id)
    {
        return view('products.edit')
            ->with([
                'product' => Product::query()->find($id)
            ]);
    }

    public function update(UpdateProductRequest $request, int $id)
    {
        return ProductService::update($request->all(), $id)
            ? redirect()->route('products.list')
            : dd(111);
    }

    public function delete(int $id)
    {
        return ProductService::delete($id)
            ? redirect()->route('products.list')
            : dd(500);
    }
}
