<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Sumeba ― Meal_App

## About This App
* 食事の投稿ができるアプリ

## テーブル定義
* Postテーブル･･･記事情報
* Categoryテーブル･･･カテゴリー名
* Likeテーブル･･･お気に入り情報
* ユーザーテーブル･･･ユーザー情報
https://docs.google.com/spreadsheets/d/1VdWp_Awm9f7zIwQgp0iTLUFBmT-SMRuStEf9KGyNZDE/edit?usp=sharing

## 実装機能
* CRUD機能
* お気に入り・お気に入り削除ボタンを連打した際、2重登録問題
* 投稿からの経過時間を表示

## 工夫した点
* 経過時間表示を1日~30日まで表示させたところ

## 画面

### 一覧画面
<img width="1920" alt="スクリーンショット 2021-10-13 22 56 04（2）" src="https://user-images.githubusercontent.com/70826356/137152601-1b4b7ce4-f32b-4e9e-9514-9ea1776a2a15.png">

### 詳細画面
* 自分の記事
<img width="1920" alt="スクリーンショット 2021-10-13 22 23 17（2）" src="https://user-images.githubusercontent.com/70826356/137156158-5f2ae7ba-2d1d-49a0-a017-3361bbf1e4af.png">

* 他人の記事
<img width="1920" alt="スクリーンショット 2021-10-13 22 22 31（2）" src="https://user-images.githubusercontent.com/70826356/137156176-60477f21-a44c-43d7-a786-13c1293a37aa.png">

* ログインしていない
<img width="1920" alt="スクリーンショット 2021-10-13 22 22 52（2）" src="https://user-images.githubusercontent.com/70826356/137156187-17765d75-c17a-40b1-9746-be742d64eb68.png">

### 新規作成画面
<img width="1920" alt="スクリーンショット 2021-10-13 22 58 08" src="https://user-images.githubusercontent.com/70826356/137156373-e1c95db5-cd98-4ceb-925f-bc41a65a8f4a.png">

### 編集画面
<img width="1920" alt="スクリーンショット 2021-10-13 22 58 46" src="https://user-images.githubusercontent.com/70826356/137156526-909bc1d9-3d55-4862-8d71-9bc40f22f0ac.png">

