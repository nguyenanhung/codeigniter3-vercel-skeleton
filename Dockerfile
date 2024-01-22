FROM php:7.4-fpm

# Copy composer.lock and composer.json
# COPY composer.lock composer.json /var/www/

# Set working directory
WORKDIR /var/www

# Set ENV
ENV PHP_OPCACHE_VALIDATE_TIMESTAMPS="0" \
    PHP_OPCACHE_MAX_ACCELERATED_FILES="50000" \
    PHP_OPCACHE_MEMORY_CONSUMPTION="256" \
    PHP_OPCACHE_MAX_WASTED_PERCENTAGE="10"

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libpq-dev \
    g++ \
    libicu-dev \
    libxml2-dev \
    libzip-dev \
    libonig-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    autoconf \
    pkg-config \
    libssl-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install mysqli pdo_mysql mbstring zip exif bcmath soap
RUN docker-php-ext-configure intl
RUN docker-php-ext-install intl

# Install OpCache
RUN docker-php-ext-install opcache
COPY ./docker/php/opcache.ini /usr/local/etc/php/conf.d/opcache.ini
COPY ./docker/php/opcache-default.blacklist /usr/local/etc/php/conf.d/opcache-default.blacklist

# Install GD
RUN docker-php-ext-configure gd --with-jpeg=/usr/include/ --with-freetype=/usr/include/
#RUN docker-php-ext-configure gd --with-gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ --with-png=/usr/include/
RUN docker-php-ext-install gd

# Install mcrypt
RUN apt-get update && apt-get install -y \
        libmcrypt-dev
RUN pecl install mcrypt \
    && docker-php-ext-enable mcrypt

# Install apcu
RUN pecl install apcu \
    && docker-php-ext-enable apcu

# Install Imagemagick & PHP Imagick ext
RUN apt-get update && apt-get install -y \
        libmagickwand-dev --no-install-recommends

RUN pecl install imagick && docker-php-ext-enable imagick

# Install xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug

# remove not necessary files
RUN rm -rf /var/lib/apt/lists/*

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory contents
COPY . /var/www

# Copy existing application directory permissions
# COPY --chown=www:www . /var/www

# Permission
RUN chown www:www /var/www
RUN chown www:www /tmp
# Change current user to www


# Change current user to www
USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]