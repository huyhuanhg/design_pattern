<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\ObjectPool;

use DesignPatterns\Creational\ObjectPool\WorkerPool;

class PoolTest
{
    public static function testCanGetNewInstancesWithGet()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();

        dump($worker1, $worker2);
        // $this->assertCount(2, $pool);
        // $this->assertNotSame($worker1, $worker2);
    }

    public static function testCanGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $pool->dispose($worker1);
        $worker2 = $pool->get();

        dump($worker1, $worker2);
        // $this->assertCount(1, $pool);
        // $this->assertSame($worker1, $worker2);
    }
}