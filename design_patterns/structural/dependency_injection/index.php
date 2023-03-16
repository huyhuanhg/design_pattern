<?php

use DesignPatterns\Structural\DependencyInjection\Container;

require_once '../../core/index.php';

class User
{
    private $profile;

    public function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }

    public function get()
    {
        return [
            'profile' => $this->profile->get()
        ];
    }

    public function method(Profile $profile)
    {
        return $profile->get();
    }
}

class Profile {

    public function get()
    {
        return [
            'name' => 'huan'
        ];
    }
}

$container = new Container();
// Bind Interface với class Implementation
// $container->bind(UserRepositoryInterface::class, User1Repository::class);
// Resolve instance của UserController
$user = $container->make(User::class);
// d_arr($user->get());  // 'Success' by echo

$refMethod = new ReflectionMethod(User::class, 'method');

$parameters = $refMethod->getParameters();
$dependencies = [];

foreach ($parameters as $parameter) {
    $dependency = $parameter->getType();

    if (is_null($dependency)) {
        if ($parameter->isDefaultValueAvailable()) {
            $dependencies[] = $parameter->getDefaultValue();
        } else {
            throw new Exception("Can not resolve dependency {$parameter->getName()}");
        }
    } else {
        $dependencies[] = (new ReflectionClass($dependency->getName()))->newInstance();
    }
}

$mth = $refMethod->invokeArgs($user, $dependencies);

d_arr($mth);
