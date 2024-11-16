# 1. Usa una imagen oficial de PHP con soporte para Laravel
FROM php:8.1-fpm

# 2. Instala extensiones necesarias para Laravel
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip \
    && docker-php-ext-install zip pdo pdo_mysql

# 3. Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# 4. Establece el directorio de trabajo
WORKDIR /var/www/html

# 5. Copia el proyecto Laravel al contenedor
COPY . .

# 6. Instala las dependencias de Composer
RUN composer install --optimize-autoloader --no-dev

# 7. Permisos para el almacenamiento y caché
RUN chmod -R 777 storage bootstrap/cache

# 8. Exponer el puerto para Laravel
EXPOSE 8000

# 9. Comando por defecto para ejecutar Laravel
CMD php artisan serve --host=0.0.0.0 --port=8000
