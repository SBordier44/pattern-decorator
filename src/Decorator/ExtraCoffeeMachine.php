<?php

declare(strict_types=1);

namespace Sylvain\PatternDecorator\Decorator;

class ExtraCoffeeMachine extends RentRoomDecoratorAbstract
{
    private const COFFEE_PRICE = 50;

    public function calculatePrice(): int
    {
        return $this->rentRoom->calculatePrice() + self::COFFEE_PRICE;
    }
}
