<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class DefaultController extends Controller
{
    public function index(){
        return view('welcome');
    }



    public function products(){

        $products =  Product::where('status', true)
                        ->orderBy('created_at', 'desc')
                        ->withCount(['users' => function ($query){
                                $query->where('status', true);
                        }])
                        ->get();

        return $products-toJson();
    }
    
}

