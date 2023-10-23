<?php

namespace App\Http\Middleware;

use App\Models\Product;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdminUpdateProductArticle
{
    public function handle(Request $request, Closure $next): Response
    {
        $productId = (int)array_reverse(explode('/', $request->url()))[1];

        $product = Product::query()->find($productId);

        if ($product->article != $request->get('article') && auth()->user()->role_id != config('products.role.admin')) {
            return redirect()->route('products.list');
        }

        return $next($request);
    }
}
