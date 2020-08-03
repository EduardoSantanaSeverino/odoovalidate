<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\Http\Requests;
use App\Cliente;
use App\Atentado;
use DateTime;
use Crypt;

class ClientesJsonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ValidarCliente(Request $request)
    {
        if ($request->has('FechaMaquina') &&
            $request->has('FechaVence') &&
            $request->has('HashId') &&
            $request->has('Exitoso')) {

            $listadoclientes = Cliente::where('HashId', $request['HashId'])->first();

            if (is_null($listadoclientes))
            {
                Atentado::create([
                    'FechaMaquina' => $request['FechaMaquina'],
                    'FechaVence' => $request['FechaVence'],
                    'FechaVenceNueva' => $request['FechaVence'],
                    'ClienteId' => '-1',
                    'HashId' => $request['HashId'],
                    'Exitoso' => $request['Exitoso']
                ]);
            }
            else
            {

                $objUltimoAtentado = Atentado::where('ClienteId', $listadoclientes['id'])->latest()->first();
                $ultimaFecha = $objUltimoAtentado['created_at'];

                $fechaMenos1Dia = new DateTime();
                $fechaMenos1Dia->modify('-1 day');

                if($ultimaFecha < $fechaMenos1Dia)
                {
                    Atentado::create([
                        'FechaMaquina' => $request['FechaMaquina'],
                        'FechaVence' => $request['FechaVence'],
                        'FechaVenceNueva' => $listadoclientes['FechaVence'],
                        'ClienteId' => $listadoclientes['id'],
                        'HashId' => $request['HashId'],
                        'Exitoso' => $request['Exitoso'],
                        'locationhref' => $request['locationhref'],
                    ]);
                }

                $dt = new DateTime();
                $retVal = [
                    'FechaVence' => $listadoclientes['FechaVence'],
                    'FechaActual' => $dt->format('Y-m-d'),
                    'UltimoHost' => $listadoclientes['HostURL'],
                ];

                return Response::json($retVal)->withHeaders([
                    'Access-Control-Allow-Origin' => $listadoclientes['HostURL'],
                    'Access-Control-Allow-Methods' => 'GET',
                    'Access-Control-Max-Age' => '1000',
                    'Access-Control-Allow-Headers'  =>  'Content-Type, Authorization, X-Requested-With'
                ]);

            }

        }
        return Response::json([]);
    }

}
