<?php

declare(strict_types=1);

namespace DesignPattern\Structural\Decorator;

class DecoratorTest
{
    public static function testCanCalculatePriceForBasicDoubleRoomBooking()
    {
        $booking = new DoubleRoomBooking();

        dump($booking->calculatePrice());
        dump($booking->getDescription());
    }

    public static function testCanCalculatePriceForDoubleRoomBookingWithWiFi()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);

        dump($booking->calculatePrice());
        dump($booking->getDescription());
    }

    public static function testCanCalculatePriceForDoubleRoomBookingWithWiFiAndExtraBed()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);
        $booking = new ExtraBed($booking);

        dump($booking->calculatePrice());
        dump($booking->getDescription());
    }
}
