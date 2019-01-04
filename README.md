### Building

### PHP 7.2

#### Building
```
docker build -f .\php\7.2-cli-alpine -t californiasvaluedtrust/php:7.2-cli-alpine .\php\
docker build -f .\php\7.2-cli-alpine-xdebug -t californiasvaluedtrust/php:7.2-cli-alpine-xdebug .\php\

docker build -f .\php\7.2-fpm-alpine -t californiasvaluedtrust/php:7.2-fpm-alpine .\php\
docker build -f .\php\7.2-fpm-alpine-xdebug -t californiasvaluedtrust/php:7.2-fpm-alpine-xdebug .\php\

docker build -f .\php\7.2-fpm-stretch -t californiasvaluedtrust/php:7.2-fpm-stretch .\php\
docker build -f .\php\7.2-fpm-stretch-xdebug -t californiasvaluedtrust/php:7.2-fpm-stretch-xdebug .\php\

docker build -f .\php\7.2-zts-stretch -t californiasvaluedtrust/php:7.2-zts-stretch .\php\
docker build -f .\php\7.2-zts-stretch-xdebug -t californiasvaluedtrust/php:7.2-zts-stretch-xdebug .\php\
```

#### Pushing
```bash
docker push californiasvaluedtrust/php:7.2-cli-alpine
docker push californiasvaluedtrust/php:7.2-cli-alpine-xdebug

docker push californiasvaluedtrust/php:7.2-fpm-alpine
docker push californiasvaluedtrust/php:7.2-fpm-alpine-xdebug

docker push californiasvaluedtrust/php:7.2-fpm-stretch
docker push californiasvaluedtrust/php:7.2-fpm-stretch-xdebug

docker push californiasvaluedtrust/php:7.2-zts-stretch
docker push californiasvaluedtrust/php:7.2-zts-stretch-xdebug
```

### PHP 7.3

#### Building
```bash
docker build -f .\php\7.3.0-rc-zts-stretch -t californiasvaluedtrust/php:7.3.0-zts-stretch .\php\
```

#### Pushing
```bash
docker push californiasvaluedtrust/php:7.3-zts-stretch
```