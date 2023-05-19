<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CamisetasController extends Controller
{
    public function index()
    {
        $camisetas = DB::table('camisetas')->paginate(12); // Paginar las camisetas, con 10 elementos por página
        return view('camisetas', ['camisetas' => $camisetas]);
    }
}
