<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;
use App\Models\Foto;
use Illuminate\Http\Request;
use Carbon\Carbon;



class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fotos = Foto::all();
        return view('fotos.index', compact('fotos'));
    }


    // routes functions
    /**
     * Show the form for creating a new foto.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $foto = new Foto;
        return view('fotos.create', compact('foto'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request)
        {
            /*
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);
        */
        $foto = new Foto;
        $foto->descricao =   $request->descricao;
        $foto->album =   $request->album;


        $file = $request->file('file');
        //$fileName = time().'.'.$request->file->extension();  
        $fileName = time() . '_' . $file->getClientOriginalName();         
        $request->file->move(public_path('uploads'), $fileName);        

        $foto->filename = $fileName;
        $foto->save();
        //Foto::create($request->all());
        return redirect()->route('fotos.index')
            ->with('success', 'Foto created successfully.');
        }



    /**
     * Show the form for editing the specified foto.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $foto = Foto::find($id);
        return view('fotos.edit', compact('foto'));
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
       /*
       $params = $request->all();
        $params->datavenc= \Carbon\Carbon::createFromFormat('d/m/Y', $request->datavenc)->format('Y-m-d h:i:s');
        $params->datapag =  \Carbon\Carbon::createFromFormat('d/m/Y', $request->datapag)->format('Y-m-d h:i:s');
 
        
        $request->validate([
        'title' => 'required|max:255',
        'body' => 'required',
        ]);
        */
        
        $request->validate([
            'file' => 'required|mimes:jpg,png,jpeg,avif|max:16048',
        ]);
    
        

        $foto = Foto::find($id);
        $foto->descricao =   $request->descricao;
        $foto->album =   $request->album;

        $file = $request->file('file');
        //$fileName = time().'.'.$request->file->extension();  
        $fileName = time() . '_' . $file->getClientOriginalName();         
        $request->file->move(public_path('uploads'), $fileName);        

        //$foto->filename = $file->getClientOriginalName();
        $foto->filename = $fileName;
        
        $foto->save();
        //$foto->update($params);
        return redirect()->route('fotos.index')
        ->with('success', 'Foto updated successfully.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foto = Foto::find($id);
        $foto->delete();
        return redirect()->route('fotos.index')
        ->with('success', 'Foto deleted successfully');
    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $foto = Foto::find($id);
        return view('fotos.show', compact('foto'));
    }

}
