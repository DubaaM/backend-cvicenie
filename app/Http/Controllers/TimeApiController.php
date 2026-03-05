<?php

namespace App\Http\Controllers;

use App\Services\TimeService;

class TimeApiController extends Controller
{
    private $timeService;

    public function __construct(TimeService $timeService)
    {
        $this->timeService = $timeService;
    }

    public function getTime()
    {
        $time = $this->timeService->getCurrentTime();

        return response()->json([
            'current_time' => $time
        ]);
    }
}
