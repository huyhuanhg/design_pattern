<?php

use DesignPatterns\Creational\LazyInitialization\UserRepository;

require_once '../../core/index.php';

$user = (new UserRepository())->findOneById(1);

dump($user);
dump($user->getPosts());
