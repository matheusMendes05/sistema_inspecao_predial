<?php

namespace App\Http\Controllers\Sistemas;

use App\Http\Controllers\Controller;
use App\models\DocumentacaoFotografica\Documentacao;
use App\models\Sistemas\Sistemas;
use Illuminate\Http\Request;

class DocumentacaoFotografica extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($edificio_id)
    {
        //
        $documentacaoFotografica = Documentacao::where('edificio_id', $edificio_id)->get();


        // dd($documentacaoFotografica);

        return view('Web._sistemas.documentacaoFotografica', [
            'documentacao' => $documentacaoFotografica,
            'edificio_id' => $edificio_id
        ]);

        // echo "<h1>Historico de documentacao fotografica</h1>";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($edificio_id, $elemento_id)
    {
        //
        $sistema = Sistemas::where('id', $elemento_id)->first();

        // dd($edificio_id);

        return view('Web._sistemas.formDocumentacaoFotografica', [
            'sistema' => $sistema,
            'edificio_id' => $edificio_id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $edificio_id, $elemento_id)
    {

        try {
            //
            $documantacaoFotografica = new Documentacao();
            $documantacaoFotografica->sistema_id = $elemento_id;
            $documantacaoFotografica->edificio_id = $edificio_id;

            $documantacaoFotografica->nao_conformidade = $request->txt_nao_conformidade;
            $documantacaoFotografica->sistema = $request->txt_sistema;
            $documantacaoFotografica->imagem = $request->txt_imagem;
            $documantacaoFotografica->recomendacao_tecnica = $request->txt_recomendacao_tecnicas;
            $documantacaoFotografica->classificacao = $request->txt_classificacao;
            $documantacaoFotografica->criticidade = $request->txt_criticidade;

            $documantacaoFotografica->save();

            return redirect()->route('documentacao.index', ['edificio_id' => $edificio_id])->withInput()->withErrors('Inspeção Realizada Com Sucesso!');
        } catch (\PDOException $th) {
            //throw $th;
            return redirect()->route('documentacao.index', ['edificio_id' => $edificio_id])->withInput()->withErrors('[ERRO]: ' . $th->getMessage());
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
    public function destroy($documento_id)
    {
        //
        try {
            $documento = Documentacao::where('id', $documento_id)->first();
            $documento->delete();

            return redirect()->back()->withInput()->withErrors("Registro excluido com Sucesso");
        } catch (\PDOException $th) {
            return redirect()->back()->withInput()->withErrors("[ERRO] " . $th->getMessage());
        }
    }
}
