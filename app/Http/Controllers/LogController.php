<?php

namespace App\Http\Controllers;

use App\Contracts\LogInterface;

class LogController extends Controller
{
    public function log(LogInterface $logger)
    {
        $logger->log('log to');
    }
}
