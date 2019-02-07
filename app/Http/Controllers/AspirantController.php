<?php

namespace App\Http\Controllers;

use App\Aspirant;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AspirantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aspirants = Aspirant::paginate();
        return view('aspirants.index', compact('aspirants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aspirants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->all();
        $aspirant = Aspirant::create([
            'name'=> $data['name'],
            'app'=> $data['app'],
            'apm'=> $data['apm'],
            'age'=> $data['age'],
            'genre'=> $data['age'],
            'direction'=> $data['direction'],
            'bornDate'=> $data['bornDate'],
            'cellphone'=> $data['cellphone'],
            'email'=> $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        return redirect()->route('aspirants.edit', $aspirant->id)
            ->with('info', 'ASpirante guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aspirant  $aspirant
     * @return \Illuminate\Http\Response
     */
    public function show(Aspirant $aspirant)
    {
        return view('aspirants.show', compact('aspirant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aspirant  $aspirant
     * @return \Illuminate\Http\Response
     */
    public function edit(Aspirant $aspirant)
    {
        return view('aspirants.edit',compact('aspirant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aspirant  $aspirant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aspirant $aspirant)
    {
        $aspirant->update($request->all());
        return redirect()->route('aspirants.edit', $aspirant->id)
            ->with('info', 'Usuario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aspirant  $aspirant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aspirant $aspirant)
    {
        $aspirant->delete();
        return back()->with('info','Eliminado correctamente');
    }
}
