<?php

namespace Programic\Nexudus\Http;

use Programic\Nexudus\Exceptions\ReferenceNotFoundException;
use Programic\Nexudus\Interfaces\ReferenceInterface;

/**
 * @method getBusiness(array $queryParams): Illuminate\Http\Client\Response
 * @method getFloorPlans(array $queryParams): Illuminate\Http\Client\Response
 * @method getFloorPlanDesks(array $queryParams): Illuminate\Http\Client\Response
 * @method getResources(array $queryParams): Illuminate\Http\Client\Response
 * @method getResource(int $resourceId): Illuminate\Http\Client\Response
 * @method getBookings(array $queryParams): Illuminate\Http\Client\Response
 * @method getTeams(array $queryParams): Illuminate\Http\Client\Response
 * @method getCoWorkers(array $queryParams): Illuminate\Http\Client\Response
 */
class References
{
    private array $methods = ['get', 'post', 'patch', 'put', 'delete'];

    public function  __construct(
        protected Request $http
    ) {
        //
    }

    public function __call(string $name, array $arguments) {
        $method = $this->getMethod($name);
        $name = str_replace($method, '', $name);

        $referenceName = "Programic\Nexudus\Http\References\\$name";

        if (class_exists($referenceName)) {
            $instance = new $referenceName();

            if (method_exists($instance, $method)) {
                return $instance->$method($this->http, $arguments[0]);
            }

            return $instance($this->http, $arguments[0]);
        }

        throw new ReferenceNotFoundException($name . ' reference not found');
    }

    private function getMethod(string $name): ?string
    {
        foreach ($this->methods as $method) {
            if (str_starts_with($name, $method)) {
                return $method;
            }
        }

        return null;
    }
}
