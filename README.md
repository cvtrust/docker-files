### Building

#### Building
```
docker build -f ./php/7.2-cli-alpine -t californiasvaluedtrust/php:7.2-cli-alpine ./php/
docker build -f ./php/7.2-cli-alpine-xdebug -t californiasvaluedtrust/php:7.2-cli-alpine-xdebug ./php/

docker build -f ./php/7.2-fpm-alpine -t californiasvaluedtrust/php:7.2-fpm-alpine ./php/
docker build -f ./php/7.2-fpm-alpine-xdebug -t californiasvaluedtrust/php:7.2-fpm-alpine-xdebug ./php/

docker build -f ./php/7.2-fpm-stretch -t californiasvaluedtrust/php:7.2-fpm-stretch ./php/
docker build -f ./php/7.2-fpm-stretch-xdebug -t californiasvaluedtrust/php:7.2-fpm-stretch-xdebug ./php/

docker build -f ./php/7.2-zts-stretch -t californiasvaluedtrust/php:7.2-zts-stretch ./php/
docker build -f ./php/7.2-zts-buster -t californiasvaluedtrust/php:7.2-zts-buster ./php/
docker build -f ./php/7.2-zts-stretch-xdebug -t californiasvaluedtrust/php:7.2-zts-stretch-xdebug ./php/

docker build -f ./php/7.3-zts-stretch -t californiasvaluedtrust/php:7.3-zts-stretch ./php/

docker build -f ./php/7.4-zts-buster -t californiasvaluedtrust/php:7.4-zts-buster ./php/
docker build -f ./php/7.4-zts-bullseye -t californiasvaluedtrust/php:7.4-zts-bullseye ./php/

docker build -f ./php/8.2-zts-bookworm --no-cache -t californiasvaluedtrust/php:8.2-zts-bookworm ./php/
docker build -f ./php/8.2-zts-swoole-bookworm --no-cache -t californiasvaluedtrust/php:8.2-zts-swoole-bookworm ./php/
```

#### Testing
```bash
docker-compose run --rm test-everything
docker-compose run --rm test-sql-server

docker-compose down
docker-compose rm
```

#### Pushing
```bash
docker push californiasvaluedtrust/php:7.2-cli-alpine
docker push californiasvaluedtrust/php:7.2-cli-alpine-xdebug

docker push californiasvaluedtrust/php:7.2-fpm-alpine
docker push californiasvaluedtrust/php:7.2-fpm-alpine-xdebug

docker push californiasvaluedtrust/php:7.2-fpm-stretch
docker push californiasvaluedtrust/php:7.2-zts-buster
docker push californiasvaluedtrust/php:7.2-fpm-stretch-xdebug

docker push californiasvaluedtrust/php:7.3-zts-stretch
docker push californiasvaluedtrust/php:7.3-zts-stretch-xdebug

docker push californiasvaluedtrust/php:7.4-zts-buster
docker push californiasvaluedtrust/php:7.4-zts-bullseye

docker push californiasvaluedtrust/php:8-zts-buster
docker push californiasvaluedtrust/php:8.2-zts-bookworm
docker push californiasvaluedtrust/php:8.2-zts-swoole-bookworm

```
