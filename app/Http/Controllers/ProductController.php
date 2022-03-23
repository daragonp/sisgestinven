<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        $listado = Product::with('category')->cursorpaginate(20);;
        return view('admin.producto/products', compact('listado', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        $suppliers = Supplier::all();
        return view('admin.producto/newproduct', compact('categories', 'suppliers'));
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
        $datosproducto = new Product();

        $image = $request->image;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('storage/products/images', $imageName);

        $datosproducto->image = $imageName;
        $datosproducto->name = $request->name;
        $datosproducto->category_id = $request->category;
        $datosproducto->supplier_id = $request->supplier;
        $datosproducto->qty = $request->qty;
        $datosproducto->buyingprice = $request->buyingprice;
        $datosproducto->sellingprice = $request->sellingprice;
        $datosproducto->expiration = $request->expiration;
        //dd($datosproducto);

        $datosproducto->save();

        return redirect()->back()->with('mensaje', 'Se ha creado el producto');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        //
        $producto = Product::find($id);

        $image = $request->image;

       if($image){
           $imageName = time().'.'.$image->getClientOriginalExtension();
           $request->image->move('storage/products/images', $imageName);
            $producto->image = $imageName;
       }

        $producto->name = $request->name;
        $producto->category_id = $request->category;
        $producto->supplier_id = $request->supplier;
        $producto->qty = $request->qty;
        $producto->buyingprice = $request->buyingprice;
        $producto->sellingprice = $request->sellingprice;
        $producto->expiration = $request->expiration;
        //dd($producto);

        $producto->save();

        return redirect()->back()->with('mensaje', 'Se ha actualizado el producto');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($product)
    {
        //
        $categories = Category::all();
        $suppliers = Supplier::all();
        $producto = Product::find($product);
        return view('admin.producto/updateproduct', compact('producto', 'categories', 'suppliers'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        //
        $producto = Product::find($product);

        $producto->delete();

        return redirect()->back()->with('mensaje', 'Se ha eliminado el producto');

    }
}
