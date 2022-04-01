<?php

namespace Programic\Nexudus\Http;

use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class Request
{
    protected PendingRequest $http;

    public function __construct() {
        $this->http = Http::nexudus();
    }

    public function get(string $url, array $queryParams = []): Response
    {
        return $this->http->get($url, $queryParams);
    }

    public function post(string $url, array $bodyParams = []): Response
    {
        return $this->http->post($url, $bodyParams);
    }
}
