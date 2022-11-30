<?php

namespace App\Http\Repositories;

use App\Models\Cep;

class CepRepository
{
    function save($data)
    {
        $cep = new Cep();

        $cep->bairro = $data->bairro;
        $cep->cep = $data->cep;
        $cep->complemento = $data->complemento;
        $cep->ddd = $data->ddd;
        $cep->gia = $data->gia;
        $cep->ibge = $data->ibge;
        $cep->localidade = $data->localidade;
        $cep->logradouro = $data->logradouro;
        $cep->siafi = $data->siafi;
        $cep->uf = $data->uf;

        if (!Cep::where('cep', $data->cep)->first()) {
            $cep->save();
        }
    }

    function findAll(){
        return Cep::all()->toArray();
    }
}
