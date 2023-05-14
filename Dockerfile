FROM php

WORKDIR /app

COPY . .

CMD [ "php", "downloadevrey.php"]
