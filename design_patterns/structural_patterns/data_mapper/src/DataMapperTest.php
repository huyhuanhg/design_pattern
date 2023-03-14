<?php

declare(strict_types=1);

namespace DesignPattern\Structural\DataMapper;

use InvalidArgumentException;

class DataMapperTest
{
    public static function testCanMapUserFromStorage()
    {
        $storage = new StorageAdapter([1 => ['username' => 'domnikl', 'email' => 'liebler.dominik@gmail.com']]);
        $mapper = new UserMapper($storage);

        $user = $mapper->findById(1);

        dump(get_class($user));
    }

    public static function testWillNotMapInvalidData()
    {
        try {
            $storage = new StorageAdapter([]);
            $mapper = new UserMapper($storage);

            $mapper->findById(1);
        } catch(InvalidArgumentException $e) {
            dump(get_class($e));
        }
    }
}