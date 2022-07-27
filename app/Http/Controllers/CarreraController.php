<?php

namespace App\Http\Controllers;
use App\Models\Carrera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carreras=Carrera::all();
        return view('Carreras.index',['carreras' => $carreras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Carreras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carreras = new Carrera;
      $carreras-> id= $request->input('id');
      $carreras-> nombre= $request->input('nombre');
      $carreras-> area= $request->input('area');
      $carreras-> fecha_creacion= $request->input('fecha_creacion');

      if($request->hasfile('foto'))
      {
        $file =$request->file('foto');
        $extention=$file->getClientOriginalExtension();
        $filename =time().'.'.$extention;
        $file->move('Upload2/Carrera/',$filename);
        $carreras-> foto = $filename;  
    }
    $carreras->save();
    return redirect()->back()->with('status','carrera e Imagen Guardada');
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
        $carreras = Carrera::find ($id);
        return view('Carreras.edit',compact('carreras'));
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
        $carreras = new Carrera;
      $carreras-> id= $request->input('id');
      $carreras-> nombre= $request->input('nombre');
      $carreras-> area= $request->input('area');
      $carreras-> fecha_creacion= $request->input('fecha_creacion');

      if($request->hasfile('foto'))
      {
        $destination='Upload2/Carrera/'.$carreras->foto; 
        if(File::exists($destination))
          {
              File:: delete($destination);
          }
        $file =$request->file('foto');
        $extention=$file->getClientOriginalExtension();
        $filename =time().'.'.$extention;
        $file->move('Upload2/Carrera/',$filename);
        $carreras->foto=$filename;  
    }
    $carreras->update();
    return redirect()->back()->with('status','carrera e Imagen Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carreras = Carrera::find ($id);
        $destination= 'Upload2/Carrera/'.$carreras->foto;
        if(File::exists($destination))
        {
          File::delete($destination);
        }
        $carreras->delete();
        return redirect()->back()->with('status','carrera e Imagen Borrados');
    }
}
