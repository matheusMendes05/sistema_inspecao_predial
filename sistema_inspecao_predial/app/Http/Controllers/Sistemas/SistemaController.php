<?php

namespace App\Http\Controllers\Sistemas;

use App\Http\Controllers\Controller;
use App\models\Edificio\edificio;
use App\models\Sistemas\Sistemas;
use Illuminate\Http\Request;

class SistemaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($edificio_id)
    {
        //
        $sistemas = Sistemas::where('edificio_id', $edificio_id)->get();

        return view('Web._sistemas.historicoSistema', [
            'sistemas' => $sistemas,
            'edificio_id' => $edificio_id
        ]);
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
        $sistema = Sistemas::where('edificio_id', $edificio_id)->get();

        return view('Web._formularios.checklist', [
            'edificio' => $edificio,
            'sistemas' => $sistema
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
        try {
            //code...
            //
            $edificio = edificio::where('id', $edificio_id)->first();

            $sistema = new Sistemas();
            $sistema->edificio_id = $edificio->id;
            $sistema->sistema = $request->txt_sistema_edificio;
            $sistema->elemento = $request->txt_elemento_formulario;
            $sistema->local = $request->txt_local;

            // armazenando foto na base de dados
            if (!empty($request->hasFile('txt_foto'))) {
                if ($request->file('txt_foto')->isValid()) {
                    // nomeando arquivo
                    $sistema->imagem = $request->file('txt_foto')->store($sistema->sistema . '/' . $sistema->elemento, 's3');
                } else {
                    $sistema->imagem = 'SEM IMAGEM';
                }
            }

            $sistema->obs = $request->txt_obs;

            $sistema->save();

            return redirect()->back()->withInput()->withErrors('Sistema ' . $sistema->sistema . ' Elemento ' . $sistema->elemento . ' Salvo Com Sucesso');
        } catch (\PDOException $th) {
            return redirect()->back()->withInput()->withErrors('ERRO: ' . $th->getCode() . ' Campos vazios, tente outra vez.');
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
    public function destroy($elemento_id)
    {
        //
        $sistema = Sistemas::where('id', $elemento_id)->first();
        $sistema->delete();

        return redirect()->back()->withInput()->withErrors('Registro excluido com Sucesso!');
    }
}
