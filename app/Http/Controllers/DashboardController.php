<?php

namespace App\Http\Controllers;
use App\Models\Products;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function main(){

        $total_products_count = Products::count();


   return view('dashboard')->with([
            'success' => 'You are logged in.',
            'total_products_count' => $total_products_count
        ]);
    }
}
