<?php

namespace Programic\Nexudus\Http\References;

use Illuminate\Http\Client\Response;
use Programic\Nexudus\Http\Request;

class Business
{
    public function __invoke(Request $http, array $queryParams): Response
    {
        return $http->get('api/sys/businesses', $queryParams);
    }
}
