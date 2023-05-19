<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
/*Route for Index*/
Route::get('/', function () {
    return view('index');
});

/*/Route for get all products from web*/
Route::get('/camisetas', 'App\Http\Controllers\CamisetasController@index');

/*/Route for show all the info about products!*/
Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('producto.show');

/*Routes for login and register*/
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*/Routes for cart functions*/
Route::post('/cart/{id}', [CartController::class, 'agregarProducto'])->name('cart.agregar');

/*/Route for show cart*/
Route::get('/cart', [CartController::class, 'mostrarCarrito'])->name('cart.mostrar');

/*/Route for delete cart*/
Route::get('/cart/vaciar', [CartController::class, 'vaciarCarrito'])->name('cart.vaciar');

/*/Route for update cart*/
Route::put('/cart/{id}', [CartController::class, 'update'])->name('cart.update');

/*/Route for delete units 1 by 1 */
Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');

/*Route for search products*/
Route::get('/productos/search', [ProductoController::class, 'search'])->name('productos.search');
