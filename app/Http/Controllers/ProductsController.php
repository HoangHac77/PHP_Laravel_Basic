<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    // how to pass data to view ?
    public function index()
    {
        // $title = 'laravel';
        // $a = 5;
        // $b = 7;
        // return view('products.index', compact('title', 'a', 'b'));
        // $name = "Hoang";
        // with('key', value) function
        // with can send only 1 parameter
        // return view('products.index')->with('name', $name);

        // send an associative array : mang ket hop
        // $myphone = [
        //     'name' => 'iphone 15',
        //     'year' => 2022,
        //     'isLike' => true,
        // ];
        // return view('products.index', compact('myphone'));

        //send directly
        // return view('products.index', [
        //     'myphone' => $myphone
        // ]);

        // print_r(route('products'));
        return view('products.index');
    }

    // public function detail($productName){
    //     // return view('products.index', [
    //     //     'product' =>  [
    //     //         'name' => 'iphone 15',
    //     //         'year' => 2022,
    //     //         'isLike' => true,
    //     //     ]
    //     // ]);

    //     $namephone = [
    //         'samsung' => 'samsung',
    //         'iphone' => 'iphone',
    //         'dell' => 'dell',
    //     ];

    //     //coalesing : default value
    //      return view('products.index', [
    //         'product' =>  $namephone[$productName] ?? "unkown device !"
    //     ]);
    // }

    public function detail($productName, $id)
    {
        return "product name =" . $productName . "product id=" . $id;
    }
}
