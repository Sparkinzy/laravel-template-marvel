# marvel 漫威

基于 laravel8 的项目模版

自带 [DcatAdmin](https://github.com/jqhph/dcat-admin) 后台最新版

追加一些常用的第三方库

## usage

创建一个名为my-blog的项目
```bash
composer create-project samuel/marvel my-blog

cd my-blog
# 安装后台管理
php artisan admin:install
```

## 库列表

```json
{
    "require": {
        "php": "^7.3|^8.0",
        "dcat/laravel-admin": "2.1.7-beta",
        "dcat/laravel-wherehasin": "^0.8.0",
        "fideloper/proxy": "^4.4",
        "fruitcake/laravel-cors": "^2.0",
        "guzzlehttp/guzzle": "^7.0.1",
        "jiannei/laravel-enum": "^1.3",
        "jiannei/laravel-response": "^1.6",
        "laravel/framework": "^8.12",
        "laravel/tinker": "^2.5",
        "overtrue/laravel-lang": "^5.0",
        "sparkinzy/dcat-distpicker": "^1.0",
        "sparkinzy/dcat-kindeditor": "^1.0",
        "sparkinzy/dcat-viewer": "^1.0",
        "sparkinzy/laravel-schedule-command": "^1.0"
    },
    "require-dev": {
        "barryvdh/laravel-debugbar": "^3.6",
        "barryvdh/laravel-ide-helper": "^2.7",
        "facade/ignition": "^2.5",
        "fakerphp/faker": "^1.9.1",
        "laravel/sail": "^1.0.1",
        "mockery/mockery": "^1.4.2",
        "nunomaduro/collision": "^5.0",
        "phpunit/phpunit": "^9.3.3"
    }
}
```



