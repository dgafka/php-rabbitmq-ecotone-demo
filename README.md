# PHP RabbitMQ - Send and Receive Messages within few lines using Ecotone
Quickly connect, send and receive messages from RabbitMQ using [Ecotone Framework](https://github.com/ecotoneframework/ecotone)

## Consumer
Want to receive `JSON`, just type for string.
Want to receive `object`, just type for given `class`.
Messages are `automatically converted to the desired type`.

## Publisher

Want to send `JSON/TEXT` just send it.  
Want to send `object/array`, Ecotone will serialize it and then send it for you :)


## Run example

- composer install
- php run_example.php