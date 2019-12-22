<?php

namespace App\Http\Controllers;

use App\category;
use App\product;
use App\cart;
use Request;

use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function showcat()
    {
        $data=category::all();
        $indata=product::all();
        return view("index",compact("data","indata")) ;
    }
    public function cartfun($id)
    {
         cart::insert(['productid'=>$id]);
        return redirect("index");
    }
    public function showcart()
    {
     $users = DB::table('carts')
            ->join('products', 'carts.productid', 'products.id')
           
            ->select('carts.quantity','carts.size','carts.id', 'products.name', 'products.image','products.description','products.price')
            ->get();
        return view("cart",compact("users"));
    }
    public function deletecart($id)
    {
        $user=cart::find($id);
        $user->delete();
        return redirect("showcart");
    }
    public function updatecart(Request $request,$id)
    {

        $user=cart::find($id);
        $user->update(Request::all());
        return redirect("showcart");
    }
    public function fillorder()
    {
        $data=DB::table('carts')
            ->join('products', 'carts.productid', 'products.id')
           
            ->select('carts.quantity','carts.size','carts.id', 'products.name', 'products.image','products.description','products.price')
            ->get();
        return view("orderform",compact("data"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {
        //
    }

    
}
