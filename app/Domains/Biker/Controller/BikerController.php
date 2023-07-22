<?php

namespace App\Domains\Biker\Controller;

use App\Domains\Biker\Infrastructure\Repository\BikerRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Services\Responser\Responser;

class BikerController extends Controller
{
    public function __construct(private BikerRepositoryInterface $bikerRepo)
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

        Responser::success($biker);
    }
}
