<?php

declare(strict_types=1);

namespace App\Router;

use Nette;
use Nette\Application\Routers\RouteList;
use Nette\Routing\Route;


final class RouterFactory
{
    use Nette\StaticClass;

    public static function createRouter(): RouteList
    {
        $router = new RouteList;
        $router->addRoute('<locale>/<presenter>/<action>[/<id>]', [
            'presenter' => 'Homepage',
            'action' => 'default',
            'id' => null,
            'locale' => [
                Route::FILTER_TABLE => [
                    'cs' => 'cs',
                    'sk' => 'sk',
                    'pl' => 'pl',
                    'en' => 'en'
                ]
            ]
        ]);
        return $router;
    }
}