<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;
use App\Models\Pagamento;
use Illuminate\Http\Request;
use Carbon\Carbon;



class PagamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pagamentos = Pagamento::all();
        return view('pagamentos.index', compact('pagamentos'));
    }


    // routes functions
    /**
     * Show the form for creating a new pagamento.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pagamento = new Pagamento;
        return view('pagamentos.create', compact('pagamento'));
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
        $pagamento = new Pagamento;
        $pagamento->itemdesc =   $request->itemdesc;
        $pagamento->qtd =   $request->qtd;
        $pagamento->obs =   $request->obs;
        $pagamento->valor =   $request->valor;
        $pagamento->situacao =   $request->situacao;
        $pagamento->datapag =  \Carbon\Carbon::createFromFormat('d/m/Y', $request->datapag)->format('Y-m-d h:i:s');
        $pagamento->datavenc= \Carbon\Carbon::createFromFormat('d/m/Y', $request->datavenc)->format('Y-m-d h:i:s');
        $pagamento->save();
        //Pagamento::create($request->all());
        return redirect()->route('pagamentos.index')
            ->with('success', 'Pagamento created successfully.');
        }



    /**
     * Show the form for editing the specified pagamento.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pagamento = Pagamento::find($id);
        return view('pagamentos.edit', compact('pagamento'));
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
        $pagamento = Pagamento::find($id);
        $pagamento->itemdesc =   $request->itemdesc;
        $pagamento->qtd =   $request->qtd;
        $pagamento->obs =   $request->obs;
        $pagamento->valor =   $request->valor;
        $pagamento->situacao =   $request->situacao;
        $pagamento->datapag =  \Carbon\Carbon::createFromFormat('d/m/Y', $request->datapag)->format('Y-m-d h:i:s');
        $pagamento->datavenc= \Carbon\Carbon::createFromFormat('d/m/Y', $request->datavenc)->format('Y-m-d h:i:s');

        $pagamento->save();
        //$pagamento->update($params);
        return redirect()->route('pagamentos.index')
        ->with('success', 'Pagamento updated successfully.');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pagamento = Pagamento::find($id);
        $pagamento->delete();
        return redirect()->route('pagamentos.index')
        ->with('success', 'Pagamento deleted successfully');
    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pagamento = Pagamento::find($id);
        return view('pagamentos.show', compact('pagamento'));
    }

}
