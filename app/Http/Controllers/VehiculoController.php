<?php

namespace App\Http\Controllers;

use App\Models\tipologia;

use App\Models\vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = vehiculo::paginate(5);
        return view('vehiculos.index', compact('vehiculos'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = tipologia::all();
        return view('vehiculos.create', compact('tipos'));
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
        /*  var_dump($request->all());
        dd($request->input('numero_vehículo'),$request->input('tipologia'),$request->input('fecha_matricula'));
        
        var_dump(  $request->input('numero_vehiculo'));  */
        
       /*  var_dump($request->all());
        dump($request->all()); */

         

        $validatedData = $request->validate([
            'numero_vehículo' => 'required|max:255',
            'placa' => 'required|max:255',
            'chasis' => 'required',
            
          ], [
           
            'numero_vehículo.required' => 'El numero es obligatorio.',
            'placa.required' => 'Es necesaria la Placa del vehiculo.',
            'chasis.required' => 'Selecione una opcion.',
            
         ]);
          
          

        // vehiculo::create($request->all()); 

         $vehiculo = new vehiculo();
       

        $vehiculo->numero_vehículo = $request->input('numero_vehículo');
        $vehiculo->placa = $request->input('placa');
        $vehiculo->chasis = $request->input('chasis');
        $vehiculo->tipologia_id = $request->input('tipologia');
       
        $vehiculo->fecha_matricula = $request->input('fecha_matricula');
        $vehiculo->save();
       
        
        session()->flash('flash_message', 'Vehiculo creado correctamente!');

        return redirect()->route('vehiculos.index');  
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(vehiculo $vehiculo)
    {
        
         $vehiculo = vehiculo::findOrFail($vehiculo->id);
        // dd($user);
       
        return view('vehiculos.show', compact('vehiculo'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(vehiculo $vehiculo)
    {
        $tipos = tipologia::all();
        
        $vehiculo = vehiculo::findOrFail($vehiculo->id);
        
        $tipos = tipologia::all();
        return view('vehiculos.edit', compact('vehiculo','tipos'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, vehiculo $vehiculo)
    {
         
        

         $data = $request->only('numero_vehículo','placa','chasis','fecha_matricula','tipologia');
        //  dd($data);
        
        
 
         $vehiculo->update($data);
 
       
         return redirect()->route('vehiculos.index')->with('success', 'vehiculo actualizado correctamente');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(vehiculo $vehiculo)
    {
        $vehiculo->delete();

        return redirect()->route('vehiculos.index');
        //
    }
}
