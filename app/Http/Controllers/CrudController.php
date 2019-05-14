<?php

namespace App\Http\Controllers;

use App\Bills;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CrudController extends Controller
{
    public function index()
    {
        $products = Products::all();
        $bills = Bills::all();
        return view('bill', ['products' => $products, 'bills' => $bills]);
    }

    public function save(Request $request)
    {
        try {
            $name_product = Products::where('id', $request->product)->first()->name;
            $bill = new Bills();
            $bill->id_producto = $request->product;
            $bill->nombre_producto = $name_product;
            $bill->cantidad = $request->cantidad;
            $bill->valor_unitario = $request->valor;
            $bill->descuento = $request->descuento;
            $bill->save();
            Session::put('success', 'Los datos del producto se han guardado correctamente!');
            return redirect()->route('home');
        } catch (\Exception $e) {
            Session::put('error', 'Ocurrio un error a la hora de guardar los datos del producto.');
            return redirect()->route('home');
        }
    }

    public function updateIndex($id)
    {
        $products = Products::all();
        $bill = Bills::where('id', $id)->first();
        $bills = Bills::all();
        return view('bill-edit' , ['bill' => $bill, 'products' => $products, 'bills' =>$bills]);
    }

    public function update(Request $request)
    {
        try {
            $bill = Bills::where('id', $request->id)->first();
            $name_product = Products::where('id', $request->product)->first()->name;

            $bill->id_producto = $request->product;
            $bill->nombre_producto = $name_product;
            $bill->cantidad = $request->cantidad;
            $bill->valor_unitario = $request->valor;
            $bill->descuento = $request->descuento;
            $bill->update();

            Session::put('success', 'Los datos de la factura se han actualizado correctamente!');
            return redirect()->route('home');
        } catch (\Exception $e) {
            Session::put('error', 'Ocurrio un error a la hora de actualizar los datos de la factura.');
            return redirect()->route('home');
        }
    }

    public function delete($id)
    {
    }
}
