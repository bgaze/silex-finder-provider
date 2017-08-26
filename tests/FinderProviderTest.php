<?php

namespace Bgaze\Silex\Provider\Tests;

use PHPUnit\Framework\TestCase;
use Silex\Application;

class FinderProviderTest extends TestCase {

    public function testRegister() {
        $app = new Application();

        $app->register(new \Bgaze\Silex\Provider\FinderProvider());

        $this->assertInstanceOf('Symfony\Component\Finder\Finder', $app['finder']);

        return $app;
    }

}
