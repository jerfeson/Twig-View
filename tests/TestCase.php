<?php
/**
 * Slim Framework (http://slimframework.com)
 *
 * @license   https://github.com/slimphp/Twig-View/blob/master/LICENSE.md (MIT License)
 */

declare(strict_types=1);

namespace Slim\Tests;

use PHPUnit\Framework\TestCase as PhpUnitTestCase;
use ReflectionProperty;

abstract class TestCase extends PhpUnitTestCase
{
    protected function assertInaccessiblePropertySame($expected, $obj, string $name)
    {
        $prop = new ReflectionProperty(get_class($obj), $name);
        $prop->setAccessible(true);
        $this->assertSame($expected, $prop->getValue($obj));
    }
}