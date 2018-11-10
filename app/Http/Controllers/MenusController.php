<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Dish;
use App\Drink;
use App\Category;
class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu = Menu::with('restaurant')->get();
		$dish = Dish::all();
        return view('menu.index',compact(['menu'],['dish']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$dish = Dish::all();
       return view('menu.create',compact('dish'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		 
         $this->validate($request, [
            'dishname' => 'required|min:2', 
			'drinkname' => 'required|min:2',
			'drinquantity' => 'required|min:0', 
			'dishquantity' => 'required|min:0', 
			'dishnprice' => 'required|min:0', 
			'drinkprice' => 'required|min:0',
			'category' => 'required',
			'dish_id' => 'required',
		], 
		[
			'name.min' => 'името не може да е с по-малко от 2 знака',
			'capacity_friday.min'=> 'свободните места не може да са по малко от 0'
		]);
		Dish::create([
            'name' => $request->dishname,
			'price' => $request->dishprice,
			'quantity' => $request->dishquantity,
        ]);
		Drink::create([
            'name' => $request->drinkname,
			'price' => $request->drinkprice,
			'quantity' => $request->drinkquantity,
        ]);
		 Category::create([
            'name' => $request->categoryname,
			'dish_id' => $request->dish_id
        ]);
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
