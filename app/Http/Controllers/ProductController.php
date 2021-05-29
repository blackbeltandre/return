<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function json(){
         return Datatables::of(Product::query())->make(true);
    }

    public function index(){
        return view('product');
    }
   
  
	public function payload(){
        $response = Http::get('http://localhost:3008', [
        	 'verify'  => false,
        	  'accept' => 'application/json',
            'limit' => 10,]);
        $responseBody = json_decode($response->body());
        return view('payload', compact('responseBody'));
	}
}