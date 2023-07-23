<?php

namespace App\Domains\Trip\Controller;

use App\Domains\Trip\Infrastructure\Repository\TripRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Services\Responser\Responser;

class TripController extends Controller
{
    public function createTrip(TripRepositoryInterface $tripRepo)
    {
        $request = request()->validate([
            'sourceLatitude' => 'required',
            'sourceLongitude' => 'required',
            'destinationLatitude' => 'required',
            'destinationLongitude' => 'required',
            'description' => 'nullable|max:255',
        ]);

        // TODO: calculate fee

        $trip = $tripRepo->createTrip([...$request, 'user_id' => auth()->user()->id]);


    }
}
