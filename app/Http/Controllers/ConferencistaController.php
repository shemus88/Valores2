<?php

namespace App\Http\Controllers;
use App\Models\Conferencista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ConferencistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conferencistas=Conferencista::all();
        return view('Conferencistas.index',['conferencistas' => $conferencistas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Conferencistas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conferencistas = new Conferencista;
      $conferencistas-> id= $request->input('id');
      $conferencistas-> nombre= $request->input('nombre');
      $conferencistas-> ap_paterno= $request->input('ap_paterno');
      $conferencistas-> ap_materno= $request->input('ap_materno');
      $conferencistas-> email= $request->input('email');
      $conferencistas-> numcel= $request->input('numcel');
      $conferencistas-> perfil= $request->input('perfil');

      if($request->hasfile('foto'))
      {
        $file =$request->file('foto');
        $extention=$file->getClientOriginalExtension();
        $filename =time().'.'.$extention;
        $file->move('Upload3/Conferencistas/',$filename);
        $conferencistas-> foto = $filename;  
    }
    $conferencistas->save();
    return redirect()->back()->with('status','conferencista e Imagen Guardada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conferencistas = Conferencista::find ($id);
        return view('Conferencistas.show',compact('conferencistas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conferencistas = Conferencista::find ($id);
        return view('Conferencistas.edit',compact('conferencistas'));
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
        $conferencistas = new Conferencista;
      $conferencistas-> id= $request->input('id');
      $conferencistas-> nombre= $request->input('nombre');
      $conferencistas-> ap_paterno= $request->input('ap_paterno');
      $conferencistas-> ap_materno= $request->input('ap_materno');
      $conferencistas-> email= $request->input('email');
      $conferencistas-> numcel= $request->input('numcel');
      $conferencistas-> perfil= $request->input('perfil');

      if($request->hasfile('foto'))
      {
        $destination='Upload3/Conferencistas/'.$conferencistas->foto; 
        if(File::exists($destination))
          {
              File:: delete($destination);
          }
        $file =$request->file('foto');
        $extention=$file->getClientOriginalExtension();
        $filename =time().'.'.$extention;
        $file->move('Upload3/Conferencistas/',$filename);
        $conferencistas-> foto = $filename;  
    }
    $conferencistas->save();
    return redirect()->back()->with('status','conferencista e Imagen Guardada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conferencistas = Conferencista::find ($id);
        $destination= 'Upload3/Conferencistas/'.$conferencistas->foto;
        if(File::exists($destination))
          {
              File:: delete($destination);
          }
        $conferencistas->delete();
        return redirect()->back()->with('status','conferencista e Imagen Borrados');
    }
}
