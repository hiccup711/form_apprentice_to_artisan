<?php

namespace App\Http\Controllers;

use App\Logs\CouldLogger;
use App\Logs\DBLogger;
use App\Logs\FileLogger;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function log()
    {
        $target = config('log.target');

        $content = 'Log this.';

        switch ($target) {
            case 'db':
                (new DBLogger())->log($content);
                break;
            case 'file':
                (new FileLogger())->log($content);
                break;
            default:
                (new CouldLogger())->log($content);
        }
    }
}
