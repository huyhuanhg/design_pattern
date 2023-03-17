<?php

declare(strict_types=1);

namespace DesignPatterns\Behavioral\TemplateMethod;

class JourneyTest
{
    public static function testCanGetOnVacationOnTheBeach()
    {
        $beachJourney = new BeachJourney();
        $beachJourney->takeATrip();

        dump($beachJourney->getThingsToDo());
    }

    public static function testCanGetOnAJourneyToACity()
    {
        $cityJourney = new CityJourney();
        $cityJourney->takeATrip();

        dump($cityJourney->getThingsToDo());
    }
}
