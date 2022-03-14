<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class EventController extends Controller
{
    public function home(){

        $search = request('search');

        if($search){
            $produto = Product::where([
                ['product' , 'like' , '%' .$search. '%']
            ])->get();
        }else{
            $produto = Product::all(); 
        }

        return view('template.home' , ['busca' => $search , 'produto' => $produto ]);
    }

    public function categoria(){
        
        return view('template.categoria');
    }

    public function produto($slug){

        $produto = Product::where([
            ['slug' ,   'like' , '%' .$slug. '%' ]
        ])->get();

      //dd($slug , $produto);
        return view('template.produto' , ['produtos' => $produto]);
    }

}
