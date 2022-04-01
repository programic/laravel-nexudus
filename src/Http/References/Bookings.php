<?php

namespace Programic\Nexudus\Http\References;

use Illuminate\Http\Client\Response;
use Programic\Nexudus\Http\Request;

class Bookings
{
    public function __invoke(Request $http, array $queryParams): Response
    {
        return $http->get('api/spaces/bookings', $queryParams);
    }
}
