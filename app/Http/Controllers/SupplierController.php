<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $proveedores = Supplier::all();
        return view('admin.proveedor/suppliers', compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();
        return view('admin.proveedor/newsupplier', compact('suppliers'));
    
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
        $datosproveedor = new Supplier();

        $datosproveedor->name = $request->name;
        $datosproveedor->phone = $request->phone;
        $datosproveedor->address = $request->address;
        //dd($datosproveedor);

        $datosproveedor->save();

        return redirect()->back()->with('mensaje', 'Se ha creado el proveedor');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        //
        $proveedor = Supplier::find($id);

        $proveedor->name = $request->name;
        $proveedor->phone = $request->phone;
        $proveedor->address = $request->address;
        //dd($proveedor);

        $proveedor->save();

        return redirect()->back()->with('mensaje', 'Se ha actualizado el proveedor');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($supplier)
    {
        //
   
        $proveedores = Supplier::find($supplier);
        return view('admin.proveedor/updatesupplier', compact('proveedores'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($supplier)
    {
        //
        $proveedor = Supplier::find($supplier);

        $proveedor->delete();

        return redirect()->back()->with('mensaje', 'Se ha eliminado el proveedor');
    }
}
