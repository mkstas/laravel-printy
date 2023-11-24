<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public $orderObject;

    public function __construct()
    {
        $this->orderObject = new Order();
    }

    public function cart(Request $request)
    {
        $orderId = session('orderId');
        if (!is_null($orderId)) {
            $order = $this->orderObject->findOrFail($orderId);
        }
         else {
            $order = null;
        }
        return view('cart', compact('order'));
    }

    public function addCart($productId)
    {
        $orderId = session('orderId');

        if (is_null($orderId)) {
            $order = $this->orderObject->create();
            session(['orderId' => $order->id]);
        } else {
            $order = $this->orderObject->find($orderId);
        }

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            $pivotRow->count++;
            $pivotRow->update();
        } else {
            $order->products()->attach($productId);
        }

        return back();
    }

    public function removeCart($productId)
    {
        $orderId = session('orderId');

        if (is_null($orderId)) {
            return back();
        }

        $order = $this->orderObject->find($orderId);

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if ($pivotRow->count <= 1) {
                $order->products()->detach($productId);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }

        return back();
    }

    public function cartPlace()
    {
        return view('confirm');
    }

    public function cartConfirm(Request $req)
    {
        $orderId = session('orderId');

        if (is_null($orderId)) {
            return redirect()->route('about_us');
        }
        $order = $this->orderObject->find($orderId);
        $order->name = $req->name;
        $order->phone = $req->phone;
        $order->email = $req->email;
        $order->status = 1;
        $order->save();

        session()->forget('orderId');

        return redirect()->route('about_us');
    }
}
