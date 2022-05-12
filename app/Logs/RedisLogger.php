<?php
namespace App\Logs;

use App\Contracts\LogInterface;

class RedisLogger implements LogInterface
{
    public function log($content)
    {
        dd($content. ' Redis');
    }
}
