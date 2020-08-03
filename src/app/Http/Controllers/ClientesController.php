<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Cliente;
use App\Http\Requests\ClientesRequest;
use Crypt;
use App\Atentado;

class ClientesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        /*$listadoclientes = Art::all();*/
        $listadoclientes = Cliente::latest()->get();
        return View('clientes.index', compact('listadoclientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientesRequest $request)
    {
        Cliente::create([
            'Nombre' => $request['Nombre'],
            'Telefono' => $request['Telefono'],
            'Email' => $request['Email'],
            'HashId' => Crypt::encrypt($request['Telefono']),
            'HashId2' => Crypt::encrypt($request['HostURL']),
            'FechaVence' => $request['FechaVence'],
            'HostURL' => $request['HostURL']
        ]);

        /*return $input;*/
        return redirect('clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $cliente = Cliente::findOrFail($id);
        $listadoAtentados = Atentado::where('ClienteId', $id)->latest()->take(1000)->get();
        return View('clientes.show', compact('cliente','listadoAtentados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return View('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClientesRequest $request, $id)
    {

        $cliente = Cliente::findOrFail($id);

        $HashId = '';
        $HashId2 = '';
        
        if($request['HashId'] == ''){
            $HashId = Crypt::encrypt($request['Telefono']);
        }else{
            $HashId = $request['HashId'];
        }

        if($request['HashId2'] == ''){
            $HashId2 = Crypt::encrypt($request['HostURL']);
        }else{
            $HashId2 = $request['HashId2'];
        }

        $cliente->update([
            'Nombre' => $request['Nombre'],
            'Telefono' => $request['Telefono'],
            'Email' => $request['Email'],
            'HashId' => $HashId,
            'HashId2' => $HashId2,
            'FechaVence' => $request['FechaVence'],
            'HostURL' => $request['HostURL']
        ]);

        return redirect('clientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::destroy($id);
        return redirect('clientes');
    }
}
