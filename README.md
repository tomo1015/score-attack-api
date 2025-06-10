# 🎮 ScoreAttackApi

## 📌 概要 / Overview
このプロジェクトはゲームのスコア投稿・ランキング取得用のバックエンドAPIです。
Laravelを用いて設計・実装しました。

---

## 🛠 使用技術 / Tech Stack
- Laravel 10
- MySQL
- Redis
- PHP 8.3
- PHPUnit
- Laravel Sanctum（API認証）

---

## ✨ 主な機能 / Features
- ユーザー登録・ログイン
- スコア投稿（自己ベスト保存）
- 日次ランキング取得（Redisキャッシュ対応）
- 日次報酬処理（バッチ）
- API認証（Sanctumとミドルウェアでの認証対応）

---

## 🧭 設計方針
- Controller → Service → Logic → Repository の構成で責務を分離
- ビジネスロジックは Logic に集約し、テストしやすく
- ランキング取得は Redis キャッシュを優先
- API仕様は Postman コレクションで管理

---

## 🚀 セットアップ手順 / How to Run
```bash
git clone ...
composer install
php artisan migrate --seed
php artisan serve
```

---

## 📘API仕様
（準備中）

---

## 🏗️アーキテクチャ図
（準備中）

---

## 👤 担当範囲 / My Role
- 全て担当

---

## 📝 今後の課題 / ToDo
- エフェクト演出・キャラクターモーションの強化
- UI（HP・攻撃・タイマー）の実装
- プレイヤーの選択・操作の介入

---

## 📅 開発期間
2025年06月〜現在（継続開発中）

## 📫 連絡先 / Contact
- GitHub: [https://github.com/tomo1015](https://github.com/tomo1015)
- メール: [tomo_a0901@outlook.jp]

     
