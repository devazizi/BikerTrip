<?php

namespace App\Domains\Biker\Repository;

use App\Domains\Biker\Infrastructure\Repository\BikerRepositoryInterface;
use App\Domains\Biker\Model\Biker;

class BikerRepository implements BikerRepositoryInterface
{
    public function createBiker($data)
    {
        return Biker::query()->create($data);
    }

    public function verifyBiker($bikerId)
    {
        $biker = Biker::findOrFail($bikerId);
        $biker->update(['verified' => true]);
    }
}
