<?php

namespace Bgaze\Silex\Provider;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Symfony\Component\Finder\Finder;

class FinderProvider implements ServiceProviderInterface {

    public function register(Container $app) {
        $app['finder'] = function () {
            return new Finder();
        };
    }

}
