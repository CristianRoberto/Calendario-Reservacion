<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // llamo a mi vista  
        return view('evento.index');
        //
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
        //aplica la validacion al request, validamos que toda la informacion sea correcta
        request()->validate(Evento::$rules);
        $evento=Evento::create($request->all());
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
        //consulta todo los datos de la base datos
        $evento=Evento::all();//accediendo a los registros
        return response()->json($evento); //devolviendo el registro
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Obtener el evento por su ID
        $evento = Evento::find($id);
    
        // Formatear la fecha y hora en el campo start
        $evento->start = Carbon::createFromFormat('Y-m-d H:i:s', $evento->start)->format('Y-m-d H:i');
    
        // Formatear el campo hora
        $evento->hora = Carbon::parse($evento->hora)->format('H:i');


        return response()->json($evento);
    }




    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, Evento $evento)
    {
        //
        request()->validate(Evento::$rules);//aqui validamos
        $evento->update($request->all());//hacemos la aptualizacion
        return response()->json($evento);//mandamos los datos que salgan en un formato Json
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $evento=Evento::find($id)->delete();
        return response()->json($evento);

    }
}
