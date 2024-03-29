<?php

use DesignPatterns\Structural\Decorator\DecoratorTest;

require_once '../../core/index.php';

DecoratorTest::testCanCalculatePriceForBasicDoubleRoomBooking();
DecoratorTest::testCanCalculatePriceForDoubleRoomBookingWithWiFi();
DecoratorTest::testCanCalculatePriceForDoubleRoomBookingWithWiFiAndExtraBed();
