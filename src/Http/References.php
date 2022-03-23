<?php

namespace Programic\Nexudus\Http;

use Illuminate\Support\Facades\Http;
use Programic\Nexudus\Http\References\FloorPlanDesks;
use Programic\Nexudus\Http\References\FloorPlans;

class References
{
    public function __construct(
        protected Http $http
    ) {
        //
    }

    public function floorplans(array $queryParams = []): FloorPlans
    {
        return new FloorPlans($this->http, $queryParams);
    }

    public function floorplandesks(array $queryParams = []): FloorPlanDesks
    {
        return new FloorPlanDesks($this->http, $queryParams);
    }
}
