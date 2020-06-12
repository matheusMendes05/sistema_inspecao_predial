<?php

namespace App\Http\Controllers\Edificio;

use App\Http\Controllers\Controller;
use App\Http\Controllers\GoogleMaps\GoogleMapsController;
use App\models\Edificio\edificio;
use App\models\Edificio\usuario_edificio;
use App\models\GoogleMaps\GoogleMaps;
use App\models\Sistemas\Sistemas;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EdificioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuario = User::find(Auth::user()->id);

        $edificios = $usuario->edificio()->get();

        return view('Web._edificio.historicoEdificio', [
            'edificios' => $edificios
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Web._edificio.cadastroEdificio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $edificio = new edificio();

            // cadastrando um edificio
            $edificio->responsavel_inspecao = $request->txtNome;
            $edificio->data = $request->txtData;
            $edificio->nome_edificio = $request->txtNomeEdificio;
            $edificio->endereco = $request->txtEndereco;
            $edificio->bairro = $request->txtBairro;
            $edificio->complemento = $request->txtComplemento;
            $edificio->cep = $request->txtCEP;
            $edificio->cnpj = $request->txtCNPJ;
            $edificio->tipologia = $request->inlineRadioOptions;

            $edificio->responsavel_edificio = $request->txtResponsavel;
            $edificio->responsavel_telefone = $request->txtTelefone;
            $edificio->responsavel_email = $request->txtEmail;

            $edificio->outros = $request->txtOutro;
            $edificio->n_pavimentos = $request->txtNpavimentos;
            $edificio->ano_construcao = $request->txtAnoConstrucao;
            $edificio->construtora = $request->txtConstrutora;
            $edificio->administrador = $request->txtAdministrador;
            // $edificio->responsavel_acompanhamento_obra = $request->responsavelObra;
            $edificio->save();

            // salvando localizacao do edificio
            if (isset($request->localizacao) && $request->localizacao == "localizacao") {
                GoogleMapsController::store($request, $edificio->id);
            }

            // retorna obj usuario autenticao
            $usuario = User::find(Auth::user()->id);
            // alimentando a tabela pivot
            $usuario->edificio()->attach($edificio);
            // retornar para historico de edificios
            return redirect()->route('edificio.index')->withErrors('Registro cadastrado com Sucesso!');
        } catch (\PDOException $th) {
            return redirect()->back()->withInput()->withErrors('[ERRO]' . $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($edificio_id)
    {
        //
        $edificio = edificio::where('id', $edificio_id)->first();
        $mapa = GoogleMaps::where('edificio_id', $edificio_id)->first();
        $sistema = Sistemas::where('edificio_id', $edificio_id)->get();

        $contador = count($sistema);

        return view('Web._edificio.verificarEdificio', [
            'edificio' => $edificio,
            'mapa' => $mapa,
            'contador' => $contador
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($edificio_id)
    {
        $edificio = edificio::where('id', $edificio_id)->first();

        return view('Web._edificio.editarEdificio', [
            'edificio' => $edificio
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $edificio_id)
    {
        try {
            //code...
            $edificio = edificio::where('id', $edificio_id)->first();
            // Editando um edificio
            $edificio->responsavel_inspecao = $request->txtNome;
            $edificio->data = $request->txtData;
            $edificio->nome_edificio = $request->txtNomeEdificio;
            $edificio->endereco = $request->txtEndereco;
            $edificio->bairro = $request->txtBairro;
            $edificio->complemento = $request->txtComplemento;
            $edificio->cep = $request->txtCEP;
            $edificio->cnpj = $request->txtCNPJ;
            $edificio->tipologia = $request->inlineRadioOptions;
            $edificio->responsavel_edificio = $request->txtResponsavel;
            $edificio->responsavel_telefone = $request->txtTelefone;
            $edificio->responsavel_email = $request->txtEmail;
            $edificio->outros = $request->txtOutro;
            $edificio->n_pavimentos = $request->txtNpavimentos;
            $edificio->ano_construcao = $request->txtAnoConstrucao;
            $edificio->construtora = $request->txtConstrutora;
            $edificio->administrador = $request->txtAdministrador;
            $edificio->save();

            return redirect()->route('edificio.index')->withInput()->withErrors('Registro alterado com sucesso');
        } catch (\PDOException $th) {
            //throw $th;
            return redirect()->route('edificio.index')->withInput()->withErrors('[Erro]' . $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($edificio_id)
    {
        $edificio = edificio::where('id', $edificio_id)->first();
        $edificio->delete();
        return redirect()->route('edificio.index')->withInput()->withErrors('Registro excluido com sucesso');
    }
}
