<?php

namespace App\Http\Controllers;

use App\Models\documento;
use App\Models\vehiculo;
use Illuminate\Http\Request;

class DocumentoController extends Controller
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function add($id)
    {
        //dd($id);
        $vehiculo = vehiculo::findOrFail($id);
        //dd($vehiculo->id); 
        //, compact('vehiculo')
        return view('documentos.create', compact('vehiculo'));
    }

    /**
     * Show the form for creating a new resource.
     
     *@param  \App\Models\vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function create(vehiculo  $vehiculo)
    {
        dd($vehiculo->id);
        $vehiculo = vehiculo::findOrFail($vehiculo);
        //dd($vehiculo); 
        //, compact('vehiculo')
        return view('documentos.create', compact('vehiculo'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * *@param  \App\Models\documento  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
         //dd($request);
        
        if($request->hasFile("urlpdf")){

            $file=$request->file("urlpdf");
            $nombre = "pdf_".time().".".$file->guessExtension();
            $ruta = public_path("pdf/".$nombre);
            if($file->guessExtension()=="pdf"){
                copy($file, $ruta);
            }else{

                return redirect()->route('vehiculos.index')->with('warning', "EL DOCUMENTO QUE ESTAS INTENTANDO AGREGAR NO ES UN PDF");
                //dd("NO ES UN PDF");
            }
            $documento = documento::create($request->only('nombre','fecha_expedicion','fecha_vencimiento','valor','vehiculo_id')); 
            $documento->path = $ruta;
            $documento->update();

            
        }
        

        return redirect()->route('vehiculos.index')->with('success', 'Documento agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function show(documento $documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function edit(documento $documento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, documento $documento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\documento  $documento
     * @return \Illuminate\Http\Response
     */
    public function destroy(documento $documento)
    {
        //
    }
}
