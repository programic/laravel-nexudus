<?php

namespace Programic\Nexudus\Http\References;

use Illuminate\Http\Client\Response;
use Programic\Nexudus\Http\Request;

class FloorPlanDesks
{
    public function __invoke(Request $http, array $queryParams): Response
    {
        return $http->get('api/sys/floorplandesks', $queryParams);
    }
}
