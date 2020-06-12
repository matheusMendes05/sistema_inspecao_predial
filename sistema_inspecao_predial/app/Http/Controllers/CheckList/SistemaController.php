<?php

namespace App\Http\Controllers\CheckList;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Sistemas\EstruturasController;
use App\models\Edificio\edificio;
use Illuminate\Http\Request;

class SistemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($edificio_id)
    {
        //
        $edificio = edificio::where('id', $edificio_id)->first();

        return view('Web._formularios.checklist', [
            'edificio' => $edificio
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $edificio_id)
    {
        //
        // dd($request);
        $edificio = edificio::where('id', $edificio_id)->first();

        // dd($edificio->id);

        if (isset($request->txt_sistema_edificio) && $request->txt_sistema_edificio == "Estruturas") {
            return EstruturasController::store($request, $edificio->id);
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
