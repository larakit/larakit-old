<?php

namespace App\Http;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Illuminate\Routing\Router;
use Larakit\Boot;

class Kernel extends HttpKernel {
    
    public function __construct(Application $app, Router $router) {
        $this->routeMiddleware  = Boot::middlewares_route();
        $this->middlewareGroups = Boot::middlewares_group();
        $this->middleware       = Boot::middlewares();
        parent::__construct($app, $router);
    }
}