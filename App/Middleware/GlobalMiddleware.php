<?php

namespace App\Middleware;

use App\Middleware\Contract\MiddlewareInterface;


class GlobalMiddleware implements MiddlewareInterface
{
    public function handle()
    {
        // die('GLOBAL Middleware');
    }
}
// $global_middlewares = [
//     'global' => [
//         " BlockIE::class",
//         "BlockChrome::class",
//         "BlockFirefox::class"
//     ]
// ];
