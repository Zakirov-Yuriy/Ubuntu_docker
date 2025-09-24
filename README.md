# Типовой стенд: Nginx + PHP-FPM + PostgreSQL (Docker Compose)

# Цель
Демонстрация практических навыков работы с Docker, настройкой обратного прокси (Nginx), PHP-FPM и PostgreSQL.

# Запуск проекта
```bash
# клонируем репозиторий
git clone https://github.com/Zakirov-Yuriy/Ubuntu_docker.git
cd Ubuntu_docker

# копируем пример .env и при необходимости меняем пароли
cp .env.example .env

# запускаем контейнеры
docker compose up -d --build
```
# Доступ

Статическая страница: http://localhost/

PHP info: http://localhost/info.php

Проверка БД: http://localhost/db_test.php

Если проект разворачивается на VPS, замените localhost на IP-адрес или домен сервера.

# Безопасность

Порт PostgreSQL наружу не проброшен (доступ только внутри сети app_net).

Данные подключения вынесены в .env, в репозитории хранится только .env.example.

# Полезные команды
 статус контейнеров
docker compose ps

 # логи всех сервисов
docker compose logs -f

 # перезапуск сервисов
docker compose restart nginx php db

 # остановка и удаление контейнеров
docker compose down
