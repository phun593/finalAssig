<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\newProduct;
use \App\BuyItem;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newProduct()
    {
        





        return view ('newProduct');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)

    {

        $item = new newProduct;
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->discription = $request->input('discription');
        $item->save();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function buyItem(Request $request)
    {
        $item = new BuyItem;
        $item->name = $request->input('name');
        $item->price = $request->input('price');
        $item->discription = $request->input('discription');
        $item->buy = $request->input('buy');
        $item->save();


    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {


      
        $item = newProduct::all();
        $data['item'] = $item;
        return($item);
        
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function  total()
    {
        $item =  BuyItem::all()->sum('price');
        
        return($item);

    }
       public function  orders()
    {
        $item =  BuyItem::all()->count('price');
        
        return($item);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function best()
    {
     $best = BuyItem::all()->max('price');

    

     return($best);

    }

   
    public function  worst()
    {
        $worst = BuyItem::all()->min('price');
        
        return($worst);
    }
}
