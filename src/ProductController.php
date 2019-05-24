<?php

namespace Osc2nuke\OSCOM;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Osc2nuke\OSCOM\Product;
use App\ProductTranslations;

class ProductController extends Controller
{
    //
        public function index(Requests $id)
    {
        $result = Product::where('id', $id)->firstOrFail();

        return view('oscom::add', compact('result'));
    }

   public function show($id)
    {
        $product = Product::find($id);
        $product_description = Product::find($id)->translation->first();
        
        dd($product_description);
        //dd($product);
        return view('oscom::add')->with([
            'product' => $product,
            'product_description' => $product_description,
        ]);
    }
}
