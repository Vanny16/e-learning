<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\User;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function main(){

        $total_products_count = Products::count();
        $total_users_count = Users::count();


   return view('dashboard')->with([
            'success' => 'You are logged in.',
            'total_products_count' => $total_products_count,
            'total_users_count' => $total_users_count
        ]);
    }
}
