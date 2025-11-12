<?php

namespace App\Services;

use App\Repositories\Interfaces\TourRepositoryInterface as InterfacesTourRepositoryInterface;
use App\Repositories\Interfaces\TourRepositoryInterface;

class TourService
{
    protected $repo;

    public function __construct(InterfacesTourRepositoryInterface $repo)
        {
            $this->repo = $repo;
        }

    public function getTourHome() {
        return $this->repo->getThreeLastest();
    }
}
