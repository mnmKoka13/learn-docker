FROM php:8.2.12

RUN apt-get update
RUN apt-get install -y iputils-ping

RUN docker-php-ext-install pdo_mysql


# 事前にmy-networkを作成しておく
# DBコンテナを起動しておく
# DBコンテナをmy-networkに接続しておく
# ====================
# docker container run \
# --name db \
# --rm \
# --detach \
# --env MYSQL_ROOT_PASSWORD=secret \
# --env MYSQL_DATABASE=sample \
# --publish 3306:3306 \
# --network my-network \
# mysql:8.2.0

# 実行したコマンド
# ====================
# docker container run \
# --rm \
# --mount type=bind,source="$(pwd)",target=/my-work \
# --network my-network \
# my-php:pdo_mysql \
# php /my-work/main.php

# - id: 1, name: John Doe
# - id: 2, name: Jane Doe