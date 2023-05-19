<?php
namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
     public function show($id)
    {
        $producto = Producto::find($id);
        return view('producto.show', compact('producto'));
    }

    /*Function for search products in web*/
    public function search(Request $request)
    {
        $query = $request->input('query');
        $productos = Producto::where('nombre', 'like', '%' . $query . '%')->get();
        return view('producto.info', compact('productos', 'query'));
    }
}
