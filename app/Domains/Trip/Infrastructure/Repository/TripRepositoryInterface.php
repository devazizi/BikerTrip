<?php

namespace App\Domains\Trip\Infrastructure\Repository;

use App\Domains\Trip\Model\Trip;

interface TripRepositoryInterface
{
    public function createTrip(array $tripData): Trip;
}
