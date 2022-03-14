<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produto = Product::all();

        return view('admin.produtos' , ['produto' => $produto ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria = Category::all();

        return view('admin.produtos-create' , ['categoria' => $categoria ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $help = new Helpers();
        $transforma = $request->product;
        $slug = $help->str_slug("$transforma");

        $produto = new Product();
        
        $produto->category = $request->category;
        $produto->title = $request->title;
        $produto->slug = $slug;
        $produto->description = $request->description;
        $produto->product = $request->product;
        $produto->link = $request->link;
        $produto->short_description = $request->short_description;
        $produto->content = $request->content;

        if($request->hasFile('image') ** $request->file('image')->isValid()){

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $request->image->move(public_path('image/events') , $imageName);

            $produto->imagem = $imageName;
        }else{
            null;
        }

       $produto->save();

        return redirect('./produtos')->with('msg' , 'Evento criado com sucesso');

       
        dd($request , $produto , $imageName );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Product::findOrFail($id);

        $categoria = Category::all();
        
        return view('admin.produtos-update' , ["produto" => $produto , "categoria" => $categoria ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Product::findOrFail($id);
        
        return view('admin.produtos-update' , ["produto" => $produto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $help = new Helpers();
        $transforma = $request->product;
        $slug = $help->str_slug("$transforma");

        $produto =  Product::find($request->id);
        
        $produto->category = $request->category;
        $produto->title = $request->title;
        $produto->slug = $slug;
        $produto->description = $request->description;
        $produto->product = $request->product;
        $produto->link = $request->link;
        $produto->short_description = $request->short_description;
        $produto->content = $request->content;

        if($request->hasFile('image') ** $request->file('image')->isValid()){

            $requestImage = $request->image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $request->image->move(public_path('image/events') , $imageName);

            $produto->imagem = $imageName;
        }else{
            null;
        } 


       $produto->save();

        return redirect('./produtos')->with('msg' , 'Evento Editado com sucesso');



        dd($request , $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect('./produtos')->with('msg' , 'Evento Editado com sucesso');
    }
}
