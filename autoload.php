<?php

$namespaceMap = [
    md5('DesignPattern') => 'core',
    md5('DesignPattern\Creational\AbstractFactory') => 'design_patterns/creational_patterns/abstract_factory/src',
    md5('DesignPattern\Creational\Builder') => 'design_patterns/creational_patterns/builder/src',
    md5('DesignPattern\Creational\FactoryMethod') => 'design_patterns/creational_patterns/method_factory/src',
    md5('DesignPattern\Creational\Singleton') => 'design_patterns/creational_patterns/singleton/src',
    md5('DesignPattern\Creational\Prototype') => 'design_patterns/creational_patterns/prototype/src',
    md5('DesignPattern\Creational\LazyInitialization') => 'design_patterns/creational_patterns/lazy_initialization/src',
    md5('DesignPattern\Creational\ObjectPool') => 'design_patterns/creational_patterns/object_pool/src',
    md5('DesignPattern\Structural\DependencyInjection') => 'design_patterns/structural_patterns/dependency_injection/src',
    md5('DesignPattern\Structural\Adapter') => 'design_patterns/structural_patterns/adapter/src',
    md5('DesignPattern\Structural\Bridge') => 'design_patterns/structural_patterns/bridge/src',
    md5('DesignPattern\Structural\Facade') => 'design_patterns/structural_patterns/facade/src',
    md5('DesignPattern\Structural\Proxy') => 'design_patterns/structural_patterns/proxy/src',
    md5('DesignPattern\Structural\Registry') => 'design_patterns/structural_patterns/registry/src',
    md5('DesignPattern\Structural\Composite') => 'design_patterns/structural_patterns/composite/src',
    md5('DesignPattern\Structural\DataMapper') => 'design_patterns/structural_patterns/data_mapper/src',
    md5('DesignPattern\Structural\Decorator') => 'design_patterns/structural_patterns/decorator/src',
    md5('DesignPattern\Structural\Flyweight') => 'design_patterns/structural_patterns/flyweight/src',
    md5('DesignPattern\Structural\FluentInterface') => 'design_patterns/structural_patterns/fluent_interface/src',
];

function autoload(string $class)
{
    global $namespaceMap;

    $namespace = preg_replace('/\\\\\w+$/', '', $class);
    $path = $namespaceMap[md5($namespace)] ?? null;

    if (!isset($path)) {
        exit(1);
    }

    $className = str_replace("$namespace\\", '', $class);
    $filePath = __ROOT_DIR__ . "/{$path}/{$className}.php";

    if (file_exists($filePath))
    {
        require_once($filePath);
    } else {
        exit(1);
    }
}

spl_autoload_register('autoload');
