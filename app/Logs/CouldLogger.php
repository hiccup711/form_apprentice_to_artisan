<?php
namespace App\Logs;

use App\Contracts\LogInterface;

class CouldLogger implements LogInterface
{
    public function log($content)
    {
        //输出 Log 日志到云。
        dd($content. ' Could');
    }
}
