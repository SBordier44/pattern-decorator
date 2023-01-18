<?php

declare(strict_types=1);

namespace Sylvain\PatternDecorator\Contract;

interface RentRoomInterface
{
    public function calculatePrice(): int;
}
