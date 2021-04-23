#!/usr/bin/env bash

# 当前更新任务
cd .
COMPOSER_MEMORY_LIMIT=-1 composer install --optimize-autoloader --no-dev -vvv
php artisan optimize:clear && php artisan optimize
cp -f .env.production .env
chown -R nobody:nobody storage
chown -R nobody:nobody public
chown -R nobody:nobody bootstrap
echo "同步supervisord配置文件"
#supervisorctl update
echo "同步完成"


