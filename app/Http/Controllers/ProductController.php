<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category_pr;


class ProductController extends Controller
{
    public function getProductsByCategory($categoryId)
    {
        $category_pr = Category_pr::with('product')->find($categoryId);

        if (!$category_pr) {
            return response()->json(['error' => 'Danh mục không tồn tại'], 404);
        }

        $product = $category_pr->product;

        return response()->json($product);
    }
}