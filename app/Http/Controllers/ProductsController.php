<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::orderBy('id','ASC')->paginate(50);

        return view('index',['products' => $products]);
        //$prd = Products::all();
        //return view('index'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Products $products)
    {
       //return view(create);
        return view('create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        products::create($request->all());
        return redirect()->route('products.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($products_id)
    {
        $products = Products::findOrFail($products_id);
        return view('edit',['products' => $products]);
        //return view('edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Products $products, Request $request)
    {
        $validator = Validator::make($request->all(),[
            'item_code' => 'required',
            'name_of_item' => 'required',
            'catagory_item' => 'required',
            'price' => 'required',
            'qty' => 'required',
        ]);
            if ( $validator->passes() ) {
                // Save data here
                // $employee = Employee::find($id);
                // $employee->name = $request->name;
                // $employee->email = $request->email;
                // $employee->address = $request->address;
                // $employee->save();
    
                $employee->fill($request->post())->save();
            } else {
                // return with errrors
                return redirect()->route('products.index',$products_id)->withErrors($validator)->withInput();
            }
        
        //$products->update($request->all());
        //return redirect()->route('proucts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products, Request $request)
    {
        //$products = Products::findOrFail($id);
        $products->delete();        
        return redirect()->route('products.index')->with('success','Product deleted successfully.');
    }
}
