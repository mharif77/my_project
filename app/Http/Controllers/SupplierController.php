<?php

namespace App\Http\Controllers;

use App\Models\Purchase;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Supplier::orderBy('id', 'desc', )->get();
        return view('backend.supplier.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $purchases = Purchase::orderBy('id', 'desc', )->get();
        return view('backend.supplier.create', compact('purchases'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'supplier_name' => 'required',
            'contact_number' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'purchase_id' => 'required',


        ]);



        $supplier = new Supplier;
        $supplier->supplier_name = $request->supplier_name;
        $supplier->contact_number = $request->contact_number;
        $supplier->email = $request->email;
        $supplier->phone = $request->phone;
        $supplier->purchase_id = $request->purchase_id;

        // return $specialist->save();
        $supplier->save();


        return redirect()->route('supplier.index')->with('msg', "successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        return view('backend.supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        $purchases = Purchase::orderBy('id', 'desc', )->get();
        return view('backend.supplier.edit', compact('supplier', 'purchases'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'supplier_name' => 'required',
            'contact_number' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'purchase_id' => 'required',

        ]);

        $supplier->supplier_name = $request->supplier_name;
        $supplier->contact_number = $request->contact_number;
        $supplier->email = $request->email;
        $supplier->phone = $request->phone;
        $supplier->purchase_id = $request->purchase_id;


        // return $specialist->save();
        $supplier->update();


        return redirect()->route('supplier.index')->with('msg', "successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();

        return redirect()->route('supplier.index')->with('msg', 'Deleted Successfully');
    }
}
