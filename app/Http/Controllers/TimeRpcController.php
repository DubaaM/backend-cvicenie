<?php

namespace App\Http\Controllers;

use App\Services\TimeService;

class TimeRpcController extends Controller
{
    private $timeService;

    public function __construct(TimeService $timeService)
    {
        $this->timeService = $timeService;
    }

    public function getTime()
    {
        $time = $this->timeService->getCurrentTime();

        return response("Aktuálny čas je: $time");
    }
}
