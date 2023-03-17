<?php

$namespaceMap = [
    md5('DesignPatterns') => 'design_patterns/core',
    md5('DesignPatterns\Creational\AbstractFactory') => 'design_patterns/creational/abstract_factory/src',
    md5('DesignPatterns\Creational\Builder') => 'design_patterns/creational/builder/src',
    md5('DesignPatterns\Creational\FactoryMethod') => 'design_patterns/creational/method_factory/src',
    md5('DesignPatterns\Creational\Singleton') => 'design_patterns/creational/singleton/src',
    md5('DesignPatterns\Creational\Prototype') => 'design_patterns/creational/prototype/src',
    md5('DesignPatterns\Creational\LazyInitialization') => 'design_patterns/creational/lazy_initialization/src',
    md5('DesignPatterns\Creational\ObjectPool') => 'design_patterns/creational/object_pool/src',
    md5('DesignPatterns\Structural\DependencyInjection') => 'design_patterns/structural/dependency_injection/src',
    md5('DesignPatterns\Structural\Adapter') => 'design_patterns/structural/adapter/src',
    md5('DesignPatterns\Structural\Bridge') => 'design_patterns/structural/bridge/src',
    md5('DesignPatterns\Structural\Facade') => 'design_patterns/structural/facade/src',
    md5('DesignPatterns\Structural\Proxy') => 'design_patterns/structural/proxy/src',
    md5('DesignPatterns\Structural\Registry') => 'design_patterns/structural/registry/src',
    md5('DesignPatterns\Structural\Composite') => 'design_patterns/structural/composite/src',
    md5('DesignPatterns\Structural\DataMapper') => 'design_patterns/structural/data_mapper/src',
    md5('DesignPatterns\Structural\Decorator') => 'design_patterns/structural/decorator/src',
    md5('DesignPatterns\Structural\Flyweight') => 'design_patterns/structural/flyweight/src',
    md5('DesignPatterns\Structural\FluentInterface') => 'design_patterns/structural/fluent_interface/src',
    md5('DesignPatterns\Behavioral\Command') => 'design_patterns/behavioral/command/src',
    md5('DesignPatterns\Behavioral\Interpreter') => 'design_patterns/behavioral/interpreter/src',
    md5('DesignPatterns\Behavioral\Iterator') => 'design_patterns/behavioral/iterator/src',
    md5('DesignPatterns\Behavioral\Mediator') => 'design_patterns/behavioral/mediator/src',
    md5('DesignPatterns\Behavioral\Memento') => 'design_patterns/behavioral/memento/src',
    md5('DesignPatterns\Behavioral\NullObject') => 'design_patterns/behavioral/null_object/src',
    md5('DesignPatterns\Behavioral\Observer') => 'design_patterns/behavioral/observer/src',
    md5('DesignPatterns\Behavioral\Specification') => 'design_patterns/behavioral/specification/src',
    md5('DesignPatterns\Behavioral\State') => 'design_patterns/behavioral/state/src',
    md5('DesignPatterns\Behavioral\Strategy') => 'design_patterns/behavioral/strategy/src',
    md5('DesignPatterns\Behavioral\TemplateMethod') => 'design_patterns/behavioral/template_method/src',
    md5('DesignPatterns\Behavioral\Visitor') => 'design_patterns/behavioral/visitor/src',
    md5('DesignPatterns\More\ServiceLocator') => 'design_patterns/more/service_locator/src',
    md5('DesignPatterns\More\Repository') => 'design_patterns/more/repository/src',
    md5('DesignPatterns\More\EAV') => 'design_patterns/more/entity_attribute_value/src',
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
