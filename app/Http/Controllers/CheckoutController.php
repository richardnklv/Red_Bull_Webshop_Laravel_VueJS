<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function showCheckoutPage(Request $request)
    {
        $productId = $request->input('product_id');
        $selectedOptions = $request->input('options'); // assuming an array of ID's
        $product = Product::with(['optionTypes.optionValues'])->findOrFail($productId);

        // any other logic that is needed for the page

        return view('checkout', compact('product', $selectedOptions));
    }
}
