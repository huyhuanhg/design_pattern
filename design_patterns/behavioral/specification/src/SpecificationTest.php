<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\Specification;

class SpecificationTest
{
    public static function testCanOr()
    {
        $spec1 = new PriceSpecification(50, 99);
        $spec2 = new PriceSpecification(101, 200);

        $orSpec = new OrSpecification($spec1, $spec2);

        dump($orSpec->isSatisfiedBy(new Item(100)));
        dump($orSpec->isSatisfiedBy(new Item(51)));
        dump($orSpec->isSatisfiedBy(new Item(150)));
    }

    public static function testCanAnd()
    {
        $spec1 = new PriceSpecification(50, 100);
        $spec2 = new PriceSpecification(80, 200);

        $andSpec = new AndSpecification($spec1, $spec2);

        dump($andSpec->isSatisfiedBy(new Item(150)));
        dump($andSpec->isSatisfiedBy(new Item(1)));
        dump($andSpec->isSatisfiedBy(new Item(51)));
        dump($andSpec->isSatisfiedBy(new Item(100)));
    }

    public static function testCanNot()
    {
        $spec1 = new PriceSpecification(50, 100);
        $notSpec = new NotSpecification($spec1);

        dump($notSpec->isSatisfiedBy(new Item(150)));
        dump($notSpec->isSatisfiedBy(new Item(50)));
    }
}
