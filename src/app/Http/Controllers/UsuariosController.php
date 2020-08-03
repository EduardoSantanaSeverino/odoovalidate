<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\User;
use App\Http\Requests\UsuariosRequest;
use App\Http\Requests\UsuariosUpdateRequest;

class UsuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listado = User::latest()->get();
        return View('usuarios.index', compact('listado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(UsuariosRequest $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'rolId' => $request['rolId'],
            'password' => bcrypt($request['password'])
        ]);

        /*return $input;*/
        return redirect('usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modelo = User::findOrFail($id);
        return View('usuarios.show', compact('modelo'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $usuario = User::findOrFail($id);
        return View('usuarios.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuariosUpdateRequest $request, $id)
    {
        $usuario = User::findOrFail($id);

        $usuario->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'rolId' => $request['rolId'],
            'password' => bcrypt($request['password'])
        ]);

        return redirect('usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('usuarios');
    }
}
