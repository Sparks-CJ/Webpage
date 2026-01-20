# Use official PHP + Apache image
FROM php:8.2-apache

# Copy all project files to Apache root
COPY . /var/www/html/

# Set permissions so Apache can read files
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache in foreground
CMD ["apache2-foreground"]
