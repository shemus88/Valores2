<?php

namespace App\Http\Controllers;
use App\Models\Conferencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ConferenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conferencias=Conferencia::all();
        return view('Conferencias.index',['conferencias' => $conferencias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Conferencias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conferencias = new Conferencia;
      $conferencias-> id= $request->input('id');
      $conferencias-> tema= $request->input('tema');
      $conferencias-> fecha= $request->input('fecha');
      $conferencias-> hora= $request->input('hora');
      $conferencias-> proposito= $request->input('proposito');
      $conferencias-> duracion= $request->input('duracion');
      $conferencias-> participacion= $request->input('participacion');
      $conferencias-> lugar_id= $request->input('lugar_id');
      $conferencias-> conferencista_id= $request->input('conferencista_id');
      $conferencias->save();
    return redirect()->back()->with('status','conferencias Guardada');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conferencias = Conferencia::find ($id);
        return view('Conferencias.show',compact('conferencias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conferencias = Conferencia::find ($id);
        return view('Conferencias.edit',compact('conferencias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $conferencias = new Conferencia;
      $conferencias-> id= $request->input('id');
      $conferencias-> tema= $request->input('tema');
      $conferencias-> fecha= $request->input('fecha');
      $conferencias-> hora= $request->input('hora');
      $conferencias-> proposito= $request->input('proposito');
      $conferencias-> duracion= $request->input('duracion');
      $conferencias-> participantes= $request->input('participantes');
      $conferencias-> lugar_id= $request->input('lugar_id');
      $conferencias-> conferencista_id= $request->input('conferencista_id');
    {

    }
      $conferencias->save();
    return redirect()->back()->with('status','conferencia  Guardada');
    }
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conferencias = Conferencia::find ($id);
        $conferencias->delete();
        return redirect()->back()->with('status','Conferencia sea  Borrado');
        {

        }
        $conferencias->delete();
        return redirect()->back()->with('status','conferencista e Imagen Borrados');
    }
}
