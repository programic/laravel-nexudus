<?php

namespace Programic\Nexudus;

use Illuminate\Http\Client\Response;
use Programic\Nexudus\Http\Request;

class Nexudus
{
    protected array $config;
    protected $http;
    protected $lastResponse;

    public function __construct()
    {
        $this->http = new Request();
    }

    public function get(string $url, array $queryParams = null): Response
    {
        return $this->http->get($url, $queryParams);
    }
}
