<?php

namespace App\Http\Controllers\Engenheiro;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //checking logged in user
        if (Auth::check() === true) {
            // checking the ID User
            if ($id != Auth::user()->id) {
                return redirect()->route('home')->withInput()->withErrors('[ERRO] Esta ação não pode ser Realizada.');
            }
            // User Instance
            $user = User::where('id', $id)->first();

            return view('Web._usuario.editar', ['user' => $user]);
        } else {
            return redirect()->route('home')->withInput()->withErrors('[ERRO] você precisa estar Autenticado.');
        }
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
        //checking logged in user
        if (Auth::check() === true) {
            // checking the ID User
            if ($id != Auth::user()->id) {
                return redirect()->route('home')->withInput()->withErrors('[ERRO] Esta ação não pode ser Realizada.');
            }
            // User Instance
            $user = User::where('id', $id)->first();

            if (!empty($request->name)) {
                $user->name = $request->name;
            }
            if (!empty($request->email)) {
                $user->email = $request->email;
            }
            if (!empty($request->password)) {
                $user->password = Hash::make($request->password);
            }
            if ($user->save()) {
                return view('Web._usuario.editar', ['user' => $user])->with('success', 'Usuario Alterado Com Sucesso!');
            }
        } else {
            return redirect()->route('home')->withInput()->withErrors('[ERRO] você precisa estar Autenticado.');
        }
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
