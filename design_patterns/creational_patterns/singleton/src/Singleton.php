<?php

namespace DesignPattern\Creational\Singleton;

/**
 * Singleton Class
 *
 * @property $instance
 * @method __construct
 * @method instance
 */
class Singleton {
    private static Singleton $instance;

    private function __construct()
    {
    }

    public static function instance(): Singleton
    {
        if (! isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}
