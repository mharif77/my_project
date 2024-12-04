<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Purchase::orderBy('id', 'desc', )->get();
        return view('backend.purchase.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'desc', )->get();
        return view('backend.purchase.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'item_name' => 'required',
            'quantity' => 'required',
            'purchase_price' => 'required',
            'purchase_date' => 'required',
            'supplier_name' => 'required',
            'category_id' => 'required',


        ]);

       

        $purchase = new Purchase;
        $purchase->item_name = $request->item_name;
        $purchase->quantity = $request->quantity;
        $purchase->purchase_price = $request->purchase_price;
        $purchase->purchase_date = $request->purchase_date;
        $purchase->supplier_name = $request->supplier_name;
        $purchase->category_id = $request->category_id;

        // return $specialist->save();
        $purchase->save();


        return redirect()->route('purchase.index')->with('msg', "successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Purchase $purchase)
    {
        return view('backend.purchase.show', compact('purchase'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Purchase $purchase)
    {
        $categories = Category::orderBy('id', 'desc', )->get();
        return view('backend.purchase.edit', compact('purchase', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Purchase $purchase)
    {
        $request->validate([
            'item_name' => 'required',
            'quantity' => 'required',
            'purchase_price' => 'required',
            'purchase_date' => 'required',
            'supplier_name' => 'required',
            'category_id' => 'required',

        ]);

        $purchase->item_name = $request->item_name;
        $purchase->quantity = $request->quantity;
        $purchase->purchase_price = $request->purchase_price;
        $purchase->purchase_date = $request->purchase_date;
        $purchase->supplier_name = $request->supplier_name;
        $purchase->category_id = $request->category_id;

        // return $specialist->save();
        $purchase->update();


        return redirect()->route('purchase.index')->with('msg', "successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Purchase $purchase)
    {
        $purchase->delete();

        return redirect()->route('purchase.index')->with('msg', 'Deleted Successfully');
    }
}
