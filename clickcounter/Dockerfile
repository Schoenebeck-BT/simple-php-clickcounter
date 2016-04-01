FROM debian:8.3

RUN apt-get update && apt-get install -yq --no-install-recommends apache2 php5 \
    && rm -rf /var/lib/apt/lists/*

COPY clickcounter.php /var/www/html/index.php

ENTRYPOINT apache2ctl -D FOREGROUND

EXPOSE 80

