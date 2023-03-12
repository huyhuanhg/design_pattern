<?php

declare(strict_types=1);

namespace DesignPattern\Structural\Registry;

use InvalidArgumentException;

class RegistryTest
{
    private static Service $service;

    public static function setUp(): static
    {
        if (! isset(self::$service)) {
            self::$service = new Service();
        }

        return new static;
    }

    public function testSetAndGetLogger()
    {
        Registry::set(Registry::LOGGER, static::$service);

        dump(Registry::get(Registry::LOGGER));
    }

    public function testThrowsExceptionWhenTryingToSetInvalidKey()
    {
        try {
            Registry::set('foobar', static::$service);
        } catch (InvalidArgumentException $e){
            dump(get_class($e));
        }
    }

    /**
     * notice @runInSeparateProcess here: without it, a previous test might have set it already and
     * testing would not be possible. That's why you should implement Dependency Injection where an
     * injected class may easily be replaced by a mockup
     *
     * @runInSeparateProcess
     */
    public function testThrowsExceptionWhenTryingToGetNotSetKey()
    {
        try {
            dump(Registry::get(Registry::LOGGER));
        } catch (InvalidArgumentException $e){
            dump(get_class($e));
        }
    }
}
