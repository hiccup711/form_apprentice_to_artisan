<?php
namespace App\Logs;

use App\Contracts\LogInterface;

class DBLogger implements LogInterface
{
    public function log($content)
    {
        //输出 Log 日志到 DB。
        dd($content. ' DB');
    }
}
