<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreInventario;
use App\Inventario;
use App\Producto;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $inventarios = Inventario::All();
    $productos = Producto::all();
    return view('index',['inventarios'=>$inventarios, 'productos'=>$productos]);
    }

    public function create()
    {
        return view('form');
    }

    public function store(StoreInventario $request)
    {
        $validated = $request->validated();
        
        $inventario = new Inventario();

        $inventario->descripcion = $request->input('descripcion');
        $inventario->cantidad = $request->input('cantidad');

        $inventario->save();
        $inventarios = Inventario::All();
        return view('index',['inventarios'=>$inventarios]);
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
