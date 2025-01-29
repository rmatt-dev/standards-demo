### Design Patterns Examples
1. [Abstract Factory](src/AbstractFactory/README.md)
2. [Builder](src/Builder/README.md)
3. [Facade](src/Facade/README.md)
4. [Strategy](src/Strategy/README.md)

### Run tests
```shell
docker run --rm --name composer --user $(id -u):$(id -g) -it -v $PWD:/app composer install
docker run --rm --name php83 --user $(id -u):$(id -g) -it -v $PWD:/app -w /app php:8.3-cli php ./vendor/bin/phpunit --stderr
```