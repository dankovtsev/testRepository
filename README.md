# testRepository
Репозиторий для демонстрации тестового задания

## Установка окружения:
* Установить Docker 20.x.x

## Установка проекта:
* Склонируйте проект в требуемую директорию
```
git clone https://github.com/dankovtsev/testRepository
```
## DOCKER:
* Скопировать .env.dist в .env
* make install

## Переменные окружения:
* REGISTRY=localhost
* IMAGE_TAG - версия docker-образа
* ENV - режим работы приложения (development или production)
* APP_WEB_PORT - внешний порт веб-сервера
* NGINX_CONTAINER_NAME - имя контейнера nginx
* PHP_FMP_CONTAINER_NAME - имя контейнера php-fpm
* PHP_CLI_CONTAINER_NAME - имя контейнера php-cli

## Основные make-команды:
* make up - запусть приложение
* make down - остановить приложение
* make restart - перезапустить приложение
* make install - выполнить полный цикл установки и запуска приложения
* make shell - подключится к консоли контейнера
