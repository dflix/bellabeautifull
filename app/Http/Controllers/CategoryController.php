<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Http\Controllers\Helpers;
use Faker\Extension\Helper;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Category::all();

        return view('admin.categorias' , ['categoria' => $categoria ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.categoria-create');
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
        $transforma = $request->category;
        $slug = $help->str_slug("$transforma");

       // $request->slug = $request->category;

        $category = new Category();

        $category->category = $request->category;
        $category->slug = $slug;

        $category->save();

        return redirect('/categoria')->with('msg' , 'Categoria criado com sucesso');

       // dd($request , $category);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $categoria = Category::findOrFail($id);
        
       // dd($id);
        return view('admin.categoria-update' , ['categoria' => $categoria ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $transforma = $request->category;
        $slug = $help->str_slug("$transforma");

        //$request->slug = "alguma-coisa-aqui";



        $category = Category::find($request->id);

        $category->category = $request->category;
        $category->slug = $slug;

        $category->save();


      return redirect('/categoria')->with('msg' , 'Categoria criado com sucesso');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect('/categoria')->with('msg' , 'Categoria criado com sucesso');
        //dd($id);
        

    }
}
