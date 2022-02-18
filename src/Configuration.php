<?php

namespace Ecotone\App;

use Ecotone\Amqp\AmqpQueue;
use Ecotone\Amqp\Configuration\AmqpMessageConsumerConfiguration;
use Ecotone\Amqp\Publisher\AmqpMessagePublisherConfiguration;
use Ecotone\Messaging\Attribute\ServiceContext;

class Configuration
{
    const ORDERS = "orders";
    const CONSUMER_NAME = "order_consumer";

    #[ServiceContext]
    public function publisherConfiguration()
    {
        return AmqpMessagePublisherConfiguration::create()
            ->withDefaultRoutingKey(self::ORDERS);
    }

    #[ServiceContext]
    public function config()
    {
        return [
            AmqpQueue::createWith(self::ORDERS),
            AmqpMessageConsumerConfiguration::create(self::CONSUMER_NAME, self::ORDERS)
        ];
    }
}