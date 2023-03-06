<?php

$namespaceMap = [
    md5('DesignPattern') => 'core',
    md5('DesignPattern\CreationalPattern\AbstractFactory') => 'creational_patterns/abstract_factory/src',
    md5('DesignPattern\CreationalPattern\Builder') => 'creational_patterns/builder/src',
    md5('DesignPattern\CreationalPattern\FactoryMethod') => 'creational_patterns/method_factory/src',
    md5('DesignPattern\CreationalPattern\Singleton') => 'creational_patterns/singleton/src',
    md5('DesignPattern\CreationalPattern\Prototype') => 'creational_patterns/prototype/src',
    md5('DesignPattern\CreationalPattern\DependencyInjection') => 'creational_patterns/dependency_injection/src',
    md5('DesignPattern\CreationalPattern\LazyInitialization') => 'creational_patterns/lazy_initialization/src',
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

    if (file_exists($filePath)) {
        require_once($filePath);
    } else {
        exit(1);
    }
}

spl_autoload_register('autoload');
