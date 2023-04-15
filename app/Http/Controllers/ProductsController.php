<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Products $products)
    {
       
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
    public function edit(Products $products,$id)
    {
        //return view('edit', compact('products'));
        $products=Products::find($id);
        return view('edit',['products'=>$products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $products=Products::find($id);
        $products->item_code=$request->input('item_code');
        $products->name_of_goods=$request->input('name_of_goods');
        $products->catagory_item=$request->input('catagory_item');
        $products->price=$request->input('price');
        $products->qty=$request->input('qty');
        $products->save();
        return redirect()->route('products.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Products::find($id)->delete(); 
        return redirect()->route('products.index') 
        -> with('success', 'Goods Successfully Deleted');
        
    }
    public function search(Request $request)
    {
        $search = $request->input('search');
        $products = Products::query()
            ->where('name_of_goods', 'LIKE', "%{$search}%")
            ->orWhere('catagory_item', 'LIKE', "%{$search}%")
            ->paginate(10);
        return view('index', compact('products'));
    }
}
