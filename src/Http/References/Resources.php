<?php

namespace Programic\Nexudus\Http\References;

use Illuminate\Http\Client\Response;
use Programic\Nexudus\Http\Request;

class Resources
{
    public function __invoke(Request $http, array $queryParams): Response
    {
        return $http->get('api/spaces/resources', $queryParams);
    }
}
