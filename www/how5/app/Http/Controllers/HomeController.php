<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePhotoRequest;
use App\Http\Requests\UpdatePhotoRequest;
use App\Models\Depoimento;
use App\Models\Foto;
use Illuminate\Http\Request;
use Carbon\Carbon;



class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function galeria()
    {
        $fotos = Foto::all();
        return view('home.fotos', compact('fotos'));
    }



    /**
     * Display a listing of the resource.
     */
    public function testemunho()
    {
        $depoimentos = Depoimento::all();
        return view('home.depoimentos', compact('depoimentos'));
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
