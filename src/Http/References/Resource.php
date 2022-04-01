<?php

namespace Programic\Nexudus\Http\References;

use Illuminate\Http\Client\Response;
use Programic\Nexudus\Http\Request;

class Resource
{
    public function __invoke(Request $http, int $resourceId): Response
    {
        return $http->get('api/spaces/resources/' . $resourceId);
    }
}
