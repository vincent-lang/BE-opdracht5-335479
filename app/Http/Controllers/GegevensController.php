<?php

namespace App\Http\Controllers;

use App\Models\Magazijn;
use App\Models\Product;
use App\Models\ProductPerAllergeen;
use App\Models\ProductPerLeverancier;
use Illuminate\Http\Request;

class GegevensController extends Controller
{
    public function index()
    {
        return view('snoep.index', [
            'magazijns' => Magazijn::with('product')->orderBy(Product::select('barcode')->whereColumn('products.id', 'magazijns.product_id'))->get()
        ]);
    }

    public function LeverancierIndex(Product $data)
    {
        return view('leverancier.index', [
            'productperleveranciers' => ProductPerLeverancier::with('product')->with('leverancier')->where('product_id', $data->id)->orderBy(Product::select('datumLevering')->whereColumn('products.id', 'product_per_leveranciers.product_id'))->get(),
            'magazijns' => Magazijn::all()->where('product_id', $data->id)
        ]);
    }

    public function AllergeenIndex(Product $data)
    {
        return view('allergeen.index', [
            'productperallergeens' => ProductPerAllergeen::with('product')->with('allergeen')->where('product_id', $data->id)->orderBy(Product::select('naam')->whereColumn('products.id', 'product_per_allergeens.product_id'))->get(),
            'products' => Product::all()->where('id', $data->id)
        ]);
    }
}
