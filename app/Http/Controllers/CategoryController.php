<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.categoria/newcategory');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $categoria = new Category();
        $categoria->name = $request->category_name;

        $categoria->save();

        return redirect()->back()->with('mensaje', 'Se ha creado la categoría');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        $listado = Category::all();
        return view('admin.categoria/category', compact('listado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    
     public function update($id)
    {
        //
        $categoria= Category::find($id);
        
        return view('admin.categoria/updatecategory', compact('categoria'));

    }

    public function edit(Request $request, $id)
    {
        //
        $categoria = Category::find($id);

        $categoria->name = $request->name;

        $categoria->save();

        return redirect()->back()->with('mensaje', 'Se ha actualizado la categoría');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $categoria = Category::find($id);
        $categoria->delete($id);

        return redirect()->back()->with('mensaje', 'Se ha eliminado la categoría');
    }
}
