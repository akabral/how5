<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;
use App\Models\Depoimento;
use Illuminate\Http\Request;
use Carbon\Carbon;



class DepoimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $depoimentos = Depoimento::all();
        return view('depoimentos.index', compact('depoimentos'));
    }


    // routes functions
    /**
     * Show the form for creating a new depoimento.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $depoimento = new Depoimento;
        return view('depoimentos.create', compact('depoimento'));
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
        $depoimento = new Depoimento;
        $depoimento->descricao =   $request->descricao;
        $depoimento->pessoa =   $request->pessoa;
        $depoimento->nota =   $request->nota;
        $depoimento->save();
        //Depoimento::create($request->all());
        return redirect()->route('depoimentos.index')
            ->with('success', 'Depoimento created successfully.');
        }



    /**
     * Show the form for editing the specified depoimento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $depoimento = Depoimento::find($id);
        return view('depoimentos.edit', compact('depoimento'));
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
        $depoimento = Depoimento::find($id);
        $depoimento->descricao =   $request->descricao;
        $depoimento->pessoa =   $request->pessoa;
        $depoimento->nota =   $request->nota;

        $depoimento->save();
        //$depoimento->update($params);
        return redirect()->route('depoimentos.index')
        ->with('success', 'Depoimento updated successfully.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $depoimento = Depoimento::find($id);
        $depoimento->delete();
        return redirect()->route('depoimentos.index')
        ->with('success', 'Depoimento deleted successfully');
    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $depoimento = Depoimento::find($id);
        return view('depoimentos.show', compact('depoimento'));
    }

}
