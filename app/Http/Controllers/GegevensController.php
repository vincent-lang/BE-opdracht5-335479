<?php

namespace App\Http\Controllers;

use App\Models\Magazijn;
use App\Models\Product;
use Illuminate\Http\Request;

class GegevensController extends Controller
{
    public function index()
    {
        return view('snoep.index', [
            'magazijns' => Magazijn::with('Product')->orderBy(Product::select('barcode')->whereColumn('products.id', 'magazijns.product_id'))->get()
        ]);
    }
}
