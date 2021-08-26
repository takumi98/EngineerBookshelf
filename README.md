## 技術書登録アプリ
### <概要>
書籍の登録、検索を行うアプリです。
学習の記録として、書籍を登録していきます。
今後は書籍に対するコメントからの検索や、ISBNコードを使って登録出来るように拡張していきたいと考えています。

</br>**使用画面**
</br>![image](https://user-images.githubusercontent.com/68890733/130909887-887902d9-a4fe-4eba-a8bd-a259a2c64481.png)
</br>![image](https://user-images.githubusercontent.com/68890733/130910498-3b564989-b52c-4e91-ad4e-3c3a1d601cd9.png)

### <詳細>
画面遷移図
![image](https://user-images.githubusercontent.com/68890733/130906212-2d1e6a11-5bfd-4b39-a770-3e632ec588a2.png)

<機能要件>
|  項目 |  内容 |
|:-----------:|:------------|
| トップページ           |検索フォームで検索が行える。新着一覧が表示されている。|
| 技術書検索結果一覧ページ|検索フォームによって送信されて結果を表示する。|
| 技術書詳細ページ       |技術書の詳細情報が閲覧出来る。コメントが表示される。ただし、画面への表示はメールアドレスをそのまま表示せず、表示名を表示する。|
| コメント機能            |技術書に対してのコメント登録機能。他社が登録した技術書にもコメント可能。  |
| 登録済み技術書一覧ページ|登録されている技術書を閲覧出来る。公開ページに表示するかどうかを切り替える事ができる。 |
| 技術書登録ページ|技術書を新たに登録出来る。| 
|技術書編集機能|技術書についての記載内容を変更できる。|
|技術書削除機能|登録した技術書を削除出来る。|

</br>**ER図**
</br>![image](https://user-images.githubusercontent.com/68890733/130910750-ee96fb66-f08d-4537-8b50-646d0e27178d.png)

### <ツール/環境/言語>
- ツール：Jira/Confluence/Figma/Git/GitHub
- 環境：Docker
- 言語：Laravel6

----
## 詳細設定

## 教科書

- [速習 Laravel 6 速習シリーズ Kindle 版](https://www.amazon.co.jp/dp/b07xc2ql4m)

## はじめに

- [notion の案内](https://www.notion.so/codegym/Laravel-5158254eedd9481baea7cde3ab6585dd)をご確認ください

## 初回セットアップ手順

1. 下記のコマンドを実行する

   ```
   make init
   ```

   - PC の性能にもよるが時間が掛かる

   - ライブラリ提供元の変更によってログに warning や error が入ることがあるが、`make init` 自体が成功すれば問題ない

1. 起動した laravel アプリをブラウザで表示する

   - http://localhost:10680 にアクセスする

1. 起動した phpMyAdmin をブラウザで表示する

   - http://localhost:10681 にアクセスする

## コンテナを起動する方法

- 下記のコマンドを実行する

  ```
  make up
  ```

## コンテナを終了する方法

- 下記のコマンドを実行する

  ```
  make down
  ```

## コンテナの状態を確認する方法

- 下記のコマンドを実行する

  ```
  make ps
  ```

## app コンテナの bash を実行する方法

- 下記のコマンドを実行する

  ```
  make bash
  ```

  - app コンテナの bash から composer や artisan の各種コマンドを実行可能である

  - `exit` コマンドで bash から抜けられる

## db コンテナの mysql を実行する方法

- 下記のコマンドを実行する

  ```
  make mysql
  ```

  - `exit` コマンドで mysql から抜けられる

  - このコマンドは教科書の mariadb クライアントに接続する方法と同等です

## 例

- artisan コマンドで HelloController を作成する

  - app コンテナの bash で下記のコマンドを実行する

    ```
    docker@39983adf6bac:/var/www/html/cms$ php artisan make:controller HelloController
    ```

- artisan コマンドで Book モデルを作成する

  - app コンテナの bash で下記のコマンドを実行する

    ```
    docker@39983adf6bac:/var/www/html/cms$ php artisan make:model Book
    ```

- artisan コマンドで books マイグレーションファイルを作成する

  - app コンテナの bash で下記のコマンドを実行する

    ```
    docker@39983adf6bac:/var/www/html/cms$ php artisan make:migration create_books_table
    ```
