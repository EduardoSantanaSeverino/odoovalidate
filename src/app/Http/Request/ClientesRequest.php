<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClientesRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'Nombre' => 'required|min:0|max:255',
            'Telefono' => 'required|min:0|max:255',
            'Email' => 'required|max:256',
            'HashId' => 'max:256',
            'HashId2' => 'max:256',
            'FechaVence' => 'required|date',
            'HostURL' => 'required|max:256',
        ];
    }
}
