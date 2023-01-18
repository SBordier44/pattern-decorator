<?php

declare(strict_types=1);

namespace Sylvain\PatternDecorator;

use Sylvain\PatternDecorator\Contract\RentRoomInterface;

class RentRoomClass implements RentRoomInterface
{
    public function calculatePrice(): int
    {
        return 100;
    }
}
