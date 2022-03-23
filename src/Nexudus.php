<?php

namespace Programic\Nexudus;

use Illuminate\Http\Client\Response;
use Programic\Nexudus\Http\Request;

class Nexudus
{
    protected Request $http;

    public function __construct()
    {
        $this->http = new Request();
    }

    public function get(string $url, array $queryParams = null): Response
    {
        return $this->http->get($url, $queryParams);
    }

    public function post(string $url, array $postParams = null): Response
    {
        return $this->http->post($url, $postParams);
    }
}
