FROM jetbrains/teamcity-agent:eap

RUN apt-get install -y software-properties-common && \
    add-apt-repository -y ppa:ondrej/php

#
#--------------------------------------------------------------------------
# Software's Installation
#--------------------------------------------------------------------------
#

# Install "PHP Extentions", "libraries", "Software's"
RUN apt-get update && \
    apt-get install -y --allow-downgrades --allow-remove-essential \
        --allow-change-held-packages \
        php5.6-cli \
        php5.6-common \
        php5.6-curl \
        php5.6-intl \
        php5.6-json \
        php5.6-xml \
        php5.6-mbstring \
        php5.6-mcrypt \
        php5.6-zip \
        php5.6-bcmath \
        php5.6-gd \
        php5.6-ldap \
        php5.6-dev \
        php5.6-sybase freetds-bin freetds-common libsybdb5 \
        pkg-config \
        libcurl4-openssl-dev \
        libedit-dev \
        libssl-dev \
        libxml2-dev \
        xz-utils \
        git \
        curl \
        vim \
        nano \
    && apt-get clean \
    && echo "extension=pdo_dblib.so" > /etc/php/5.6/cli/conf.d/20-pdo_dblib.ini

#####################################
# Composer & PHPUnit:
#####################################

# Install composer and add its bin to the PATH.
RUN curl -s http://getcomposer.org/installer | php && \
    echo "export PATH=${PATH}:/var/www/vendor/bin" >> ~/.bashrc && \
    mv composer.phar /usr/local/bin/composer \
    && composer global require "phpunit/phpunit=4.1.*" \
    && composer global require "phpunit/php-invoker=~1.1." \
    && ln -s  ~/.composer/vendor/phpunit/phpunit/phpunit   /usr/bin/