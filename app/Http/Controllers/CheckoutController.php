<?php

namespace App\Http\Controllers;

use App\Models\OrderedProducts;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function showCheckoutPage(Request $request)
    {
        $productId = $request->input('product_id');
        $selectedOptions = $request->input('options', []); // providing an empty array as a default value
        $product = Product::with(['optionTypes.optionValues'])->findOrFail($productId);

        // any other logic that is needed for the page

        return view('checkout', );
    }

    public function store(Request $request)
    {
        $existingSKU = DB::table('ordered_products')
            ->where('sku', $request->sku)
            ->first();
        if ($existingSKU) {
            DB::table('ordered_products')
                ->where('id', $existingSKU->id)
                ->update([
                    'quantity' =>$existingSKU->quantity + 1,
                    'updated_at' => now(),
                ]);
        }
        else {
        // if no such sku
        DB::table('ordered_products')->insert([
            'product_id' => $request->input('product_id'),
            'name' => $request->input('name'),
            'quantity' => $request->input('quantity'),
            'sku' => $request->input('sku'),
            'price' => $request->input('price'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
        return response()->json($request);
    }

    public function fetchOrderedProducts()
    {
        $orderedProducts = DB::table('ordered_products')->get();
        return response()->json($orderedProducts);
    }
}
