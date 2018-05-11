<?php

namespace App\Http\Controllers;

use App\Cart\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
    public function index(Request $request)
    {
        $cart = $request->session()->get('cart');
        var_dump($cart); die();
    }

    public function add(Request $request)
    {

        $cart = $request->session()->get('cart');

        try{
            $cart->addProduct(['menu_id' => $request['menu_id'], 'subscription_days' => $request['subscription_days'], 'start_day' => $request['start_day'], 'end_day' => $request['end_day']]);
            return "cart added";
        } catch (\Throwable $e) {
            return "истек срок корзины";
        }
    }

    public function create(Request $request)
    {
        $cart = new Cart();
        $cart->addProduct(['menu_id' => $request['menu_id'], 'subscription_days' => $request['subscription_days'], 'start_day' => $request['start_day'], 'end_day' => $request['end_day']]);

        $request->session()->put('cart', $cart);

        return "cart create";
    }
}