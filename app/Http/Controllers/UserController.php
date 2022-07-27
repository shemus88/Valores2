<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::paginate(10);
        return view('Users.index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User;
      $users-> id= $request->input('id');
      $users-> nombre= $request->input('nombre');
      $users-> ap_paterno= $request->input('ap_paterno');
      $users-> ap_materno= $request->input('ap_materno');
      $users-> email= $request->input('email');
      $users-> rol= $request->input('rol');
      $users-> sexo= $request->input('sexo');

      if($request->hasfile('foto'))
      {
        $file =$request->file('foto');
        $extention=$file->getClientOriginalExtension();
        $filename =time().'.'.$extention;
        $file->move('Upload4/Users/',$filename);
        $users-> foto = $filename;  
    }
    $users->save();
    return redirect()->back()->with('status','Usuario e Imagen Guardada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::find ($id);
        return view('Users.edit',compact('users'));
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
        $users = new User;
      $users-> id= $request->input('id');
      $users-> nombre= $request->input('nombre');
      $users-> ap_paterno= $request->input('ap_paterno');
      $users-> ap_materno= $request->input('ap_materno');
      $users-> email= $request->input('email');
      $users-> rol= $request->input('rol');
      $users-> sexo= $request->input('sexo');

      if($request->hasfile('foto'))
      {
        $destination='Upload4/Users/'.$users->foto; 
        if(File::exists($destination))
          {
              File:: delete($destination);
          }
        $file =$request->file('foto');
        $extention=$file->getClientOriginalExtension();
        $filename =time().'.'.$extention;
        $file->move('Upload4/Users/',$filename);
        $users-> foto = $filename;  
    }
    $users->save();
    return redirect()->back()->with('status','Usuario e Imagen Actualizada'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find ($id);
        $destination= 'Upload4/Users/'.$users->foto;
        if(File::exists($destination))
          {
              File:: delete($destination);
          }
        $users->delete();
        return redirect()->back()->with('status','Usuario e Imagen Borrados');
    }
}
