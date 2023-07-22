<?php

namespace App\Domains\Trip\Repository;

use App\Domains\Trip\Infrastructure\Repository\TripRepositoryInterface;
use App\Domains\Trip\Model\Trip;

class TripRepository implements TripRepositoryInterface
{

    public function createTrip(array $tripData): Trip
    {
        return Trip::create([
            'source_latitude' => $tripData['sourceLatitude'],
            'source_longitude' => $tripData['sourceLongitude'],
            'destination_latitude' => $tripData['destinationLatitude'],
            'destination_longitude' => $tripData['destinationLongitude'],
            'description' => $tripData['description']
        ]);
    }
}
