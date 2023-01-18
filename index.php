<?php

declare(strict_types=1);

use Sylvain\PatternDecorator\Decorator\ExtraCoffeeMachine;
use Sylvain\PatternDecorator\Decorator\ExtraGarden;
use Sylvain\PatternDecorator\RentRoomClass;

require 'vendor/autoload.php';

$reservation = new RentRoomClass();
$reservation = new ExtraCoffeeMachine($reservation);
$reservation = new ExtraGarden($reservation);


dump($reservation->calculatePrice());
