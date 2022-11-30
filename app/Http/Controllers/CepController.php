<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Services\CepService;
use Inertia\Inertia;

class CepController extends Controller
{
    protected $service;
    public function __construct(CepService $cep)
    {
        $this->service = $cep;
    }

    function save(Request $request)
    {
        $this->service->newCep($request);
    }

    function list()
    {
        return $this->service->findList();
    }
}
