<?php

declare(strict_types=1);

namespace DesignPatterns\More\ServiceLocator;

class ServiceLocatorTest
{
    public function __construct(private ServiceLocator $serviceLocator)
    {
    }

    public function testHasServices()
    {
        $this->serviceLocator->addInstance(LogService::class, new LogService());

        dump($this->serviceLocator->has(LogService::class));
        dump($this->serviceLocator->has(self::class));
    }

    public function testGetWillInstantiateLogServiceIfNoInstanceHasBeenCreatedYet()
    {
        $this->serviceLocator->addClass(LogService::class, []);
        $logger = $this->serviceLocator->get(LogService::class);

        dump(LogService::class, $logger);
    }
}
