<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;
use App\Models\Recebimento;
use Illuminate\Http\Request;
use Carbon\Carbon;



class RecebimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recebimentos = Recebimento::all();
        return view('recebimentos.index', compact('recebimentos'));
    }


    // routes functions
    /**
     * Show the form for creating a new recebimento.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $recebimento = new Recebimento;
        return view('recebimentos.create', compact('recebimento'));
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
        $recebimento = new Recebimento;
        $recebimento->itemdesc =   $request->itemdesc;
        $recebimento->qtd =   $request->qtd;
        $recebimento->obs =   $request->obs;
        $recebimento->valor =   $request->valor;
        $recebimento->situacao =   $request->situacao;
        $recebimento->datapag =  \Carbon\Carbon::createFromFormat('d/m/Y', $request->datapag)->format('Y-m-d h:i:s');
        $recebimento->datavenc= \Carbon\Carbon::createFromFormat('d/m/Y', $request->datavenc)->format('Y-m-d h:i:s');
        $recebimento->save();
        //Recebimento::create($request->all());
        return redirect()->route('recebimentos.index')
            ->with('success', 'Recebimento created successfully.');
        }



    /**
     * Show the form for editing the specified recebimento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recebimento = Recebimento::find($id);
        return view('recebimentos.edit', compact('recebimento'));
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
        $recebimento = Recebimento::find($id);
        $recebimento->itemdesc =   $request->itemdesc;
        $recebimento->qtd =   $request->qtd;
        $recebimento->obs =   $request->obs;
        $recebimento->valor =   $request->valor;
        $recebimento->situacao =   $request->situacao;
        $recebimento->datapag =  \Carbon\Carbon::createFromFormat('d/m/Y', $request->datapag)->format('Y-m-d h:i:s');
        $recebimento->datavenc= \Carbon\Carbon::createFromFormat('d/m/Y', $request->datavenc)->format('Y-m-d h:i:s');

        $recebimento->save();
        //$recebimento->update($params);
        return redirect()->route('recebimentos.index')
        ->with('success', 'Recebimento updated successfully.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recebimento = Recebimento::find($id);
        $recebimento->delete();
        return redirect()->route('recebimentos.index')
        ->with('success', 'Recebimento deleted successfully');
    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recebimento = Recebimento::find($id);
        return view('recebimentos.show', compact('recebimento'));
    }

}
