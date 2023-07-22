<?php

namespace App\Domains\Biker\Infrastructure\Repository;

interface RedisBikerRepositoryInterface
{
    public function setBikerLocation($latitude, $longitude);
}
