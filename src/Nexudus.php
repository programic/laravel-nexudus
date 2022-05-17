<?php

namespace Programic\Nexudus;

use Illuminate\Http\Client\Response;
use Programic\Nexudus\Http\References;
use Programic\Nexudus\Http\Request;

class Nexudus
{
    protected Request $http;

    public function __construct()
    {
        $this->http = new Request();
    }

    public function get(string $url, array $queryParams = []): Response
    {
        return $this->http->get($url, $queryParams);
    }

    public function post(string $url, array $postParams = []): Response
    {
        return $this->http->post($url, $postParams);
    }

    public function delete(string $url, array $queryParams = []): Response
    {
        return $this->http->delete($url, $queryParams);
    }

    public function put(string $url, array $postParams = []): Response
    {
        return $this->http->put($url, $postParams);
    }

    public function references(): References
    {
        return new References($this->http);
    }
}
