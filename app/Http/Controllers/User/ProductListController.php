<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;
class ProductListController extends Controller
{
   public function index(){
    $products=Product::with('category','brand','product_images');
    $brands=Brand::all();
    $categories=Category::all();
    $filterProducts=$products->filtered()->paginate(9)->withQueryString();
    return inertia::render('User/ProductList',[
        'products'=>ProductResource::collection($filterProducts),
        'brands'=>$brands,
        'categories'=>$categories,
    ]);
   }
}
