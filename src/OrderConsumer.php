<?php

namespace Ecotone\App;

use Ecotone\Messaging\Attribute\MessageConsumer;

class OrderConsumer
{
    #[MessageConsumer(Configuration::CONSUMER_NAME)]
    public function receive(Order $order): void
    {
        echo sprintf("Order for person with id %s\n", $order->personId);
        echo sprintf("Ordered %s\n", $order->product);
    }
}