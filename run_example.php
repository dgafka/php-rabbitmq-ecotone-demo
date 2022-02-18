<?php

use Ecotone\App\Configuration;
use Ecotone\Lite\EcotoneLiteApplication;
use Enqueue\AmqpExt\AmqpConnectionFactory;

require __DIR__ . "/vendor/autoload.php";

$application = EcotoneLiteApplication::boostrap([AmqpConnectionFactory::class => new AmqpConnectionFactory("amqp://guest:guest@rabbitmq:5672//")]);

// Send
$messagePublisher = $application->getMessagePublisher();

$messagePublisher->convertAndSend(["personId" => 1, "product" => "milk"]);
$messagePublisher->convertAndSend(["personId" => 2, "product" => "bread"]);

// Receive
$application->run(Configuration::CONSUMER_NAME);