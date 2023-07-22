<?php

namespace App\Domains\Biker\Infrastructure\Repository;

interface BikerRepositoryInterface
{
    public function createBiker($data);

    public function verifyBiker($bikerId);

}
