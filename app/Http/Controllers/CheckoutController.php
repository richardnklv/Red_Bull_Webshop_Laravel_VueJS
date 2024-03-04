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
        DB::table('ordered_products')->insert([
            'product_id' => $request->input('product_id'), // Ensure field name matches the request
            'quantity' => $request->input('quantity'), // Use input method for consistency
            'sku' => $request->input('sku'),
            'price' => $request->input('price'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        return response()->json($request);
    }
}
