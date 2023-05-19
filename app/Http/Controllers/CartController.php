<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Cart;

class CartController extends Controller
{
    /*/Method for add products to the cart*/
    public function agregarProducto(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $quantity = $request->input('id-quantity'); // Obtener la cantidad del formulario

        Cart::add([
            'id' => $producto->id,
            'name' => $producto->nombre,
            'price' => $producto->precio,
            'quantity' => $quantity, // Usar la cantidad del formulario
            'attributes' => [
                'descripcion' => $producto->descripcion,
                'imagen' => $producto->imagen,
            ],
        ]);

        return redirect()->route('cart.mostrar')->with('success', 'Product added to cart.');
    }

    /*Method for show all products from cart*/
    public function mostrarCarrito()
    {
        $cartItems = Cart::getContent();
        $totalPrice = Cart::getTotal();
        return view('cart', compact('cartItems', 'totalPrice'));
    }

    /*Method for remove all products from cart*/
    public function vaciarCarrito()
    {
        Cart::clear();

        $cartItems = Cart::getContent();

        return view('cart', compact('cartItems'))->with('success', 'Cart emptied successfully.');
    }

    /*Method for update the quantity of products in cart-page*/
    public function update(Request $request, $id)
    {
        $quantity = $request->input('quantity');

        Cart::update($id, [
            'quantity' => [
                'relative' => false,
                'value' => $quantity,
            ],
        ]);

        return redirect()->route('cart.mostrar')->with('success', 'Cart updated successfully.');
    }

    /* Método para eliminar un producto del carrito */
    public function remove(Request $request, $id)
    {
        Cart::remove($id);

        return redirect()->route('cart.mostrar')->with('success', 'Product removed from cart.');
    }
}
