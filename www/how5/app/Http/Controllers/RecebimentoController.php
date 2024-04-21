<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;
use App\Models\Recebimento;
use Illuminate\Http\Request;

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
        return view('recebimentos.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
        public function store(Request $request)
        {
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);
        Recebimento::create($request->all());
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
        $request->validate([
        'title' => 'required|max:255',
        'body' => 'required',
        ]);
        $recebimento = Recebimento::find($id);
        $recebimento->update($request->all());
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
