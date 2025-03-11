FROM mcr.microsoft.com/devcontainers/php:1-8.2-bookworm

COPY --from=composer/composer:latest-bin /composer /usr/bin/composer
#COPY --from=composer/composer:2-bin /composer /usr/bin/composer
# agregar al path

ENV PATH="/home/vscode/.composer/vendor/bin:${PATH}"

# Install Node.js
RUN su vscode -c "source /usr/local/share/nvm/nvm.sh && nvm install 20.9.0" 2>&1

# Install Laravel
RUN su vscode -c "composer global require laravel/installer" 2>&1 
# RUN composer global require laravel/installer

# Install MariaDB client
RUN apt-get update && export DEBIAN_FRONTEND=noninteractive \
    && apt-get install -y mariadb-client \ 
    && apt-get clean -y && rm -rf /var/lib/apt/lists/*

# Install php-mysql driver
RUN docker-php-ext-install mysqli pdo pdo_mysql

# [Optional] Uncomment this section to install additional OS packages.
# RUN apt-get update && export DEBIAN_FRONTEND=noninteractive \
#     && apt-get -y install --no-install-recommends <your-package-list-here>

# [Optional] Uncomment this line to install global node packages.
# RUN su vscode -c "source /usr/local/share/nvm/nvm.sh && npm install -g <your-package-here>" 2>&1

