<?php

namespace Ecotone\App;

class Order
{
    public function __construct(public readonly int $personId, public readonly string $product) {}
}