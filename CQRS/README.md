### Example of using CQRS in an application

### Run tests
```shell
docker run --rm --name composer --user $(id -u):$(id -g) -it -v $PWD:/app composer install
docker run --rm --name php83 --user $(id -u):$(id -g) -it -v $PWD:/app -w /app php:8.3-cli php ./vendor/bin/phpunit --stderr
```