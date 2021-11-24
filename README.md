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

- laravel/laravel:6.*
- laravel/ui:1.0
- overtrue/laravel-lang:latest
- barryvdh/laravel-ide-helper:latest
- eleven26/listen-sql   


## 命令

```bash
# 实时监听当前执行的sql
php artisan listen-sql:start 
```


