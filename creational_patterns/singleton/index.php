<?php

include_once '../../helper/index.php';

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

/**
 * Normal Class
 */
class Normal {

}

$singleton1 = Singleton::instance();

$singleton2 = Singleton::instance();

$normal1 = new Normal();

$normal2 = new Normal();

dump($singleton1);

dump($singleton2);

dump($normal1);

dump($normal2);
