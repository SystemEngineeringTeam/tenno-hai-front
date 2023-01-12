# tenno-hai-backend

https://hackmd.io/@hihumikan/r1aRDgpqs/edit

## Introduction

ユーザ登録と問題やランキング表示、インストール方法などの天皇杯をサポートするWebサービスを提供します。

## Enbironment

| Tool     | Version |
| -------- | ------- |
| Composer |         |
| Node.js  |         |
| PHP      |         |

## Usage

### Laravel

#### Dockerで行う場合

```bash
composer install
cp .env.sample .env
./vendor/bin/sail up
sail php artisan key:generate
sail php artisan migrate
sail npm install
sail npm run dev
```

#### PHP(Composer)で行う場合

```bash
composer install
cp .env.sample .env
php artisan key:generate
php artisan migrate
php artsan serve
npm install
npm run dev
```

### CDK

https://aws.amazon.com/jp/cdk/

