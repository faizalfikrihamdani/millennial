<?php

namespace App\Http\Controllers\Ecommerce;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;

class FrontController extends Controller
{
    public function index()
    {
        
        $products = Product::orderBy('created_at', 'DESC')->paginate(10);
        $categories = Category::getParent()->orderBy('name', 'ASC')->get();
        
        return view('Ecommerce.index', compact('products', 'categories'));
    }


    public function product()
    {
       
        $products = Product::orderBy('created_at', 'DESC')->paginate(12);
        
        $categories = Category::with(['child'])->withCount(['child'])->getParent()->orderBy('name', 'ASC')->get();
        
        return view('ecommerce.product', compact('products', 'categories'));
    }
    public function show($slug)
    {
        
        $product = Product::with(['category'])->where('slug', $slug)->first();
        
        return view('ecommerce.single-product', compact('product'));
    }
    public function categoryProduct($slug)
    {
        //CARI DULU KATEGORI BERDASARKAN SLUG
        //SLUG AKAN MENGAMBIL DATA PRODUCT YANG BERELASI MENGGUNAKAN METHOD PRODUCT()
        $products = Category::where('slug', $slug)->first()->product()->orderBy('created_at', 'DESC')->paginate(12);
        $categories = Category::with(['child'])->withCount(['child'])->getParent()->orderBy('name', 'ASC')->get();
        
        return view('ecommerce.product_list', compact('products', 'categories'));
    }
}
