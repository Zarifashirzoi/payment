<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Country;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function productPayment(Product $product){

        $countries = Country::all();
        return view('order.product-payment', compact(['product', 'countries']));
    }

    public function store(OrderRequest $request){
        $product = Product::find($request->product_id);
        Order::create([
            "name_on_card" => $request->name_on_card,
            "card_number" => $request->card_number,
            "exp_date" => $request->exp_date,
            "city" => $request->city,
            "state" => $request->state,
            "zip_code" => $request->zip_code,
            "street_address" => $request->street_address,
            "cvv" => $request->cvv,
            "unit" => $request->unit,
            "country_id" => $request->country_id,
            "save_card" => $request->save_card == 'on' ? true : false,
            "product_id" => $product->id,
            "amount" => $product->price,
            "user_id" => auth()->id(),
        ]);

        return back()
        ->with('success','Your payment successfully has been done.');
    }
}
