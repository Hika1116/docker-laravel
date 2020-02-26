# docker-laravel
docker-laravel

## 環境
php-fpm(7.3) + nginx(1.17) + mysql(8.0)

laravel ver6以降

## 環境構築手順
①当リポジトリのフォルダを環境構築対象のフォルダへコピー
②docker-compose.ymlのあるディレクトリで以下のコマンドを実行

```
docker-compose up -d --build
```

③laravelを初期インストールするため、以下のコマンドを実行

```
composer create-project --prefer-dist "laravel/laravel=6.0.*" .
```

④/src直下にlaravelのコードが作成され、ローカル環境へlaravelが展開される。