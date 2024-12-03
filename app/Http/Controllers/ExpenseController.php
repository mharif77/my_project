<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Expense::orderBy('id', 'desc', )->get();
        return view('backend.expense.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $expenses = Expense::orderBy('id', 'desc', )->get();
        return view('backend.expense.create', compact('expenses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'ordering_cost' => 'required',
            'carrying_cost' => 'required',
            'storage_cost' => 'required',
            'other_cost' => 'required',
           


        ]);

        
        $expense = new Expense;
        $expense->ordering_cost = $request->ordering_cost;
        $expense->carrying_cost = $request->carrying_cost;
        $expense->storage_cost = $request->storage_cost;
        $expense->other_cost = $request->other_cost;
       

        // return $specialist->save();
        $expense->save();


        return redirect()->route('expense.index')->with('msg', "successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        return view('backend.expense.show', compact('expense'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        return view('backend.expense.edit', compact('expense'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expense $expense)
    {
        $request->validate([

            'ordering_cost' => 'required',
            'carrying_cost' => 'required',
            'storage_cost' => 'required',
            'other_cost' => 'required',


        ]);

       

        $expense->ordering_cost = $request->ordering_cost;
        $expense->carrying_cost = $request->carrying_cost;
        $expense->storage_cost = $request->storage_cost;
        $expense->other_cost = $request->other_cost;
       

        // return $specialist->save();
        $expense->update();


        return redirect()->route('expense.index')->with('msg', "successfully created");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        $expense->delete();

        return redirect()->route('expense.index')->with('msg', 'Deleted Successfully');
    }
}
