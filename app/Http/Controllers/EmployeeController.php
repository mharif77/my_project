<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Employee;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Employee::orderBy('id', 'desc', )->get();
        return view('backend.employee.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::orderBy('id', 'desc', )->get();
        return view('backend.employee.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',


        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath . $postImage;
        } else {
            $photo = 'images/nophoto.jpg';
        }

        $employee = new Employee;
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->photo = $request->photo;
        $employee->email = $request->email;
        $employee->password = $request->password;
        $employee->address = $request->address;
       

        // return $specialist->save();
        $product->save();


        return redirect()->route('employee.index')->with('msg', "successfully created");
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return view('backend.employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::orderBy('id', 'desc', )->get();
        return view('backend.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $request->validate([
            'name' => 'required',
            'product_code' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
            'quantity' => 'required',
            'category_id' => 'required',


        ]);

        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $postImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $postImage);
            $photo = $destinationPath . $postImage;
        } else {
            $photo = 'images/nophoto.jpg';
        }

        $product->name = $request->name;
        $product->product_code = $request->product_code;
        $product->image = $photo;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;

        // return $specialist->save();
        $product->update();


        return redirect()->route('employee.index')->with('msg', "successfully Updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $product->delete();

        return redirect()->route('employee.index')->with('msg', 'Deleted Successfully');
    }
}
