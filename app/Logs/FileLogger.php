<?php
namespace App\Logs;

use App\Contracts\LogInterface;

class FileLogger implements LogInterface
{
    public function log($content)
    {
        //输出 Log 日志到文件。
        dd($content. ' File');
    }
}
