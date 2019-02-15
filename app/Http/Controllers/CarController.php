<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{

    public function __construct() {

        $this->middleware('auth');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
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
            'marque'      => 'required',
            'modele'      => 'required',
            'annee'       => 'required',
            'puissance'   => 'required',
            'prix'        => 'required',
            'image'       => 'required'
        ]);

        $car = new Car;
        $input = $request->input();
        $input['user_id'] = Auth::user()->id;

        $car->fill($input)->save();

        $request->file('image')->move(public_path('/img'));
        $img_name = request()->image;

        $image = new Image(['url' => $img_name]);
        $car->images()->save($image);

        //return redirect()->route('show_owned_cars')->with('success', 'Voiture enregistrée correctement');
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
        $car = Car::findOrFail($id);
        return view('cars.edit', compact('car'));
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
        $this->validate($request, [
            'marque'      => 'required',
            'modele'      => 'required',
            'annee'       => 'required',
            'puissance'   => 'required',
            'prix'        => 'required'
        ]);

        $car = Car::findOrFail($id);
        $input = $request->input();
        $car->fill($input)->save();

        return redirect()->route('show_owned_cars')->with('success', 'Voiture modifiée correctement');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car = Car::findOrFail($id);

        $car->delete();

        return redirect()->route('show_owned_cars')->with('success', 'Voiture supprimée correctement');
    }
}
