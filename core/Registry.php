<?php

namespace DesignPattern;

class Registry
{
    private static $instance;
    private $storage;

    private function __construct()
    {
    }

    public static function instance()
    {
        if (! isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function __get(string $key)
    {
        return $this->storage[$key] ?? null;
    }

    public function __set(string $key, mixed $value = null)
    {
        if (! isset($this->storage[$key]) && isset($value)) {
            $this->storage[$key] = $value;
        }
    }
}
