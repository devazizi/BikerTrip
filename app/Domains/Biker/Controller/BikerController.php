<?php

namespace App\Domains\Biker\Controller;

use App\Domains\Biker\Infrastructure\Repository\RedisBikerRepositoryInterface;
use App\Domains\Biker\Infrastructure\Repository\TripRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Services\Responser\Responser;

class BikerController extends Controller
{
    public function __construct(private TripRepositoryInterface $bikerRepo)
    {

    }

    public function registerBiker()
    {
        $bikerRequest = request()->validate([
            'first_name' => 'required|string|min:3|max:20',
            'last_name' => 'required|string|min:3|max:20',
            'email' => 'required|string|min:3|max:20',
            'cell_number' => 'required|string|min:11|max:11',
        ]);

        $biker = $this->bikerRepo->createBiker($bikerRequest);

        return Responser::success($biker);
    }

    public function verifyBiker()
    {
        $bikerRequest = request()->validate([
            'bikerId' => 'required|integer|exists:bikers,id'
        ]);

        $this->bikerRepo->verifyBiker(request()->get('bikerId'));

        return Responser::success();
    }

    public function fetchBikerInfo()
    {

    }

    public function setBikerLocation(RedisBikerRepositoryInterface $redisBikerRepo)
    {
        $requestBikerLocation = request()->validate([
            'longitude' => 'required',
            'latitude' => 'required'
        ]);
    }

}
