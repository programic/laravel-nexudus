<?php

namespace Programic\Nexudus\Http\References;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class FloorPlanDesks
{
    public function __invoke(Http $http, array $queryParams): Response
    {
        return $http->get('api/sys/floorplandesks', $queryParams);
    }
}
