# tenno-hai-front

## Introduction
<!-- 概要 -->
天皇杯をサポートするためのユーザー登録や、問題表示、ランキング表示、インストール方法などのWebサービスを提供します。アプリケーションはLaravel All in Oneで作成されていますが、WebAPIも利用できるようになります。

## Usage
<!-- 使い方 -->
https://tennohai.qqey.net から利用出来ます。

<!-- TODO -->

## Purpose
<!-- 課題目的 -->

大学のサークルであるシス研は、オンプレミス環境にサーバーを置き、現場と変わらない本格的なネットワーク環境を持っています。

しかし、サークル環境は会社と違って人の流動が多く、長期的にメンテナンスが出来ないため、手入れをするのが難しい状態になっています。

プロジェクト天皇杯は、属人化、人手不足という課題を解決するために立案されました。

## Requirement definition
<!-- 要件定義,実装した機能 -->

- 問題文表示機能
    - MarkDown
- 環境構築機能 
- チェックサービスの導入
    - Webでユーザごとの採点(LaravelAPI)
    - OTPを使って判定コードを持ってくる
    - ランキング形式で表示
- 会員登録機能(GitHubAuth?)
    - グループ機能

## Feature
<!-- 実装予定 -->

## Enbironment
<!-- env -->

| Tool     | Version |
| -------- | ------- |
| Composer |         |
| Node.js  |         |
| PHP      |         |

## Development
<!-- 開発着手方法 -->

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

Laravel on ECS(Fargate)を実装する(予定)

https://aws.amazon.com/jp/cdk/


## Database
<!-- データベース構成 -->

- User
    - id
    - name
    - email
    - verified_at
    - password
    - remembertoken
    - group_id
    - timestamps
- Issue
    - id
    - title
    - content
    - category_id
    - timestamps
- Category
    - id
    - name
    - timestamps
- Result
    - id
    - issue_id
    - user_id
    - answer
      - bool
    - timestamps
- Group
    - id
    - name
    - timestamps

## Web


## WebAPI


