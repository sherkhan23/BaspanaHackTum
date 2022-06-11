<?php

namespace App\Http\Controllers;

use App\Models\Allzhk;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart(){
        $cartQuery = Cart::query();
        $cart = $cartQuery->paginate(3);
        return view('cart', compact('cart'));

    }

    public function addToCart($id) // by this function we add product of choose in card
    {
        $data = Allzhk::find($id);

        if(!$data) {

            abort(404);

        }
// what is Session:
//Sessions are used to store information about the user across the requests.
// Laravel provides various drivers like file, cookie, apc, array, Memcached, Redis, and database to handle session data.
// so cause write the below code in controller and tis code is fix
        $cart = session()->get('cart');

        // if cart is empty then this the first product
        if(!$cart) {

            $cart = [
                $id => [
                    "zhkName" => $data->zhkName,
                    "price" => $data->price,
                    "picture" => $data->picture
                ]
            ];

            session()->put('cart', $cart);

            return redirect()->back()->with('success', 'added to cart successfully!');
        }

        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {

            session()->put('cart', $cart); // this code put product of choose in cart

            return redirect()->back()->with('success', 'Product added to cart successfully!');

        }

        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "zhkName" => $data->zhkName,
            "quantity" => 1,
            "price" => $data->price,
            "picture" => $data->picture
        ];

        session()->put('cart', $cart); // this code put product of choose in cart

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    // update product of choose in cart
    public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');
        }
    }

    // delete or remove product of choose in cart
    public function remove(Request $request)
    {
        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

}
