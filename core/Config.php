<?php

namespace DesignPattern;

class Config
{
    private $storage;

    private function __construct()
    {
    }

    public static function __callStatic($method, $arguments)
    {
        if (method_exists(static::class, $method)) {
            return static::getConfig()->{$method}(...$arguments);
        }
    }

    public static function getConfig()
    {
        if (! isset(registry()->{md5(static::class)})) {
            registry()->{md5(static::class)} = new static;
        }

        return registry()->{md5(static::class)};
    }

    public function has(string $key)
    {
        return !! $this->get($key);
    }

    public function get(string $key, mixed $default = null)
    {
        $configs = explode('.', $key);

        if (! file_exists(__CONFIG_DIR__ . "/{$configs[0]}.php"))
        {
            return is_callable($default) ? $default() : $default;
        }

        if (! isset($this->storage[$configs[0]])) {
            $this->storage[$configs[0]] = require_once(__CONFIG_DIR__ . "/{$configs[0]}.php");
        }

        $configValue = $this->storage[$configs[0]];

        unset($configs[0]);
        $keys = array_values($configs);

        foreach($keys as $key) {
            if (! isset($configValue[$key])) {
                $configValue = null;

                break;
            }

            $configValue = $configValue[$key];
        }

        return $configValue ?? is_callable($default) ? $default() : $default;
    }
}
