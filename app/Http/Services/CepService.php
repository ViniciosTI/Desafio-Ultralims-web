<?php

namespace App\Http\Services;

use App\Http\Repositories\CepRepository;
use App\Http\Data\CepData;

class CepService
{

    protected $repository;

    public function __construct()
    {
        $this->repository = new CepRepository();
    }

    function newCep($request)
    {
        if (empty($request->all()) || empty($request->cep)) {
            return;
        }
        $data = $this->CepFactory($request);
        $this->repository->save($data);
    }

    function findList()
    {
        return ["list" => $this->repository->findAll()];
    }

    function CepFactory($request)
    {
        $data = new CepData();
        $data->bairro = $request->bairro;
        $data->cep = $request->cep;
        $data->complemento = $request->complemento;
        $data->ddd = $request->ddd;
        $data->gia = $request->gia;
        $data->ibge = $request->ibge;
        $data->localidade = $request->localidade;
        $data->logradouro = $request->logradouro;
        $data->siafi = $request->siafi;
        $data->uf = $request->uf;
        return $data;
    }
}
