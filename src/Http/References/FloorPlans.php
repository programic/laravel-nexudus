<?php

namespace Programic\Nexudus\Http\References;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class FloorPlans
{
    public function __invoke(Http $http, array $queryParams): Response
    {
        return $http->get('api/sys/floorplans', $queryParams);
    }
}
