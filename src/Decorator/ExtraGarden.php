<?php

declare(strict_types=1);

namespace Sylvain\PatternDecorator\Decorator;

class ExtraGarden extends RentRoomDecoratorAbstract
{
    private const GARDEN_PRICE = 600;

    public function calculatePrice(): int
    {
        return $this->rentRoom->calculatePrice() + self::GARDEN_PRICE;
    }
}
