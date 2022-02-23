<?php

namespace TimGreenwood\ActiveTest\Http;

class Kernel extends \Orchestra\Testbench\Foundation\Http\Kernel
{
    protected $routeMiddleware = [
        'dump' => DumpMiddleware::class,
    ];
}
