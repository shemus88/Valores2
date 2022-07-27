<?php

namespace App\Http\Controllers;
use App\Models\Lugar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LugarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $lugares=Lugar::all();
        return view('Lugares.index',['lugares' => $lugares]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('Lugares.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $lugares = new Lugar;
      $lugares-> id= $request->input('id');
      $lugares-> nombre= $request->input('nombre');
      $lugares-> capacidad= $request->input('capacidad');
      $lugares-> status= $request->input('status');

      if($request->hasfile('foto'))
      {
          $file =$request->file('foto');
          $extention=$file->getClientOriginalExtension();
          $filename =time().'.'.$extention;
          $file->move('Upload/Lugar/',$filename);
          $lugares-> foto = $filename;  
      }
      $lugares->save();
      return redirect()->back()->with('status','lugar e Imagen Guardada');
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
        $lugares = Lugar::find ($id);
        return view('Lugares.edit',compact('lugares'));
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
        $lugares = new Lugar;
      $lugares-> id= $request->input('id');
      $lugares-> nombre= $request->input('nombre');
      $lugares-> capacidad= $request->input('capacidad');
      $lugares-> status= $request->input('status');

      if($request->hasfile('foto'))
      {
          $destination='Upload/Lugar/'.$lugares->foto; 
          if(File::exists($destination))
          {
              File:: delete($destination);
          }
          $file =$request->file('foto');
          $extention=$file->getClientOriginalExtension();
          $filename =time().'.'.$extention;
          $file->move('Upload/Lugar/',$filename);
          $lugares->foto=$filename;  
      }
      $lugares->update();
      return redirect()->back()->with('status','lugar e Imagen Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lugares = Lugar::find ($id);
        $destination= 'Upload/Lugar/'.$lugares->foto;
        if(File::exists($destination))
        {
          File::delete($destination);
        }

        $lugares->delete();
        return redirect()->back()->with('status','lugar e Imagen Borrados');
    }
}
