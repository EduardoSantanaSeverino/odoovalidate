<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;
use App\Atentado;

class AtentadosController extends Controller
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
        $listadoAtentados = Atentado::latest()->take(1000)->get();
        return View('atentados.index', compact('listadoAtentados'));
    }

}
