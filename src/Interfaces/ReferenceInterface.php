<?php

namespace Programic\Nexudus\Interfaces;

use Illuminate\Http\Client\Response;

interface ReferenceInterface {
    public function getBusiness(array $queryParams): Response;
    public function getFloorPlans(array $queryParams): Response;
    public function getFloorPlanDesks(array $queryParams): Response;
    public function getResources(array $queryParams): Response;
    public function getResource(int $resourceId): Response;
    public function getBookings(array $queryParams): Response;
    public function getTeams(array $queryParams): Response;
    public function getCoWorkers(array $queryParams): Response;
}
