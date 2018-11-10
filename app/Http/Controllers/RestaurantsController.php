<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreRestaurantRequest;
use App\Restaurant;
use App\Menu;

class RestaurantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurant = Restaurant::all();

        return view('restaurant.index',compact('restaurant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$menu = Menu::with('restaurant')->get();
        return view('restaurant.create',compact('menu'));
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
            'name' => 'required|min:2', 
			'address' => 'required|max:100',
			'menu_id' => 'required',
			'capacity_friday' => 'required|integer|min:0'
		], 
		[
			'name.min' => 'името не може да е с по-малко от 2 знака',
			'capacity_friday.min'=> 'свободните места не може да са по малко от 0'
		]);

        Restaurant::create([
            'name' => $request->name,
            'address' => $request->address,
			'menu_id' => $request->menu_id,
			'capacity_friday'=> $request->capacity_friday
        ]);
        
        return redirect()->back()
                ->with('message', 'Успешно въведен ресторант в списъка!');
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
