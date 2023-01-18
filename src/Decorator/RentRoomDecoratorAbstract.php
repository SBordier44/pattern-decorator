<?php

declare(strict_types=1);

namespace Sylvain\PatternDecorator\Decorator;

use Sylvain\PatternDecorator\Contract\RentRoomInterface;

abstract class RentRoomDecoratorAbstract implements RentRoomInterface
{
    public function __construct(protected RentRoomInterface $rentRoom)
    {
    }
}
