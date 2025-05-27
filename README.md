# Shimizu Kumiko WP Theme

## ✅ 使用技術
- WordPressオリジナルテーマ開発
- PHP / HTML / CSS / Bootstrap
- GitHubと連携、ローカル環境（Local）構築済

## 📂 ファイル構成

- `index.php`：投稿一覧ページ（Newsセクション） ※ `the_posts_pagination()` を用いてページ送り機能を実装済
- `single.php`：投稿詳細ページ（※現在は各記事のリンクが外部ページに向いているため未使用）
- `header.php` / `footer.php`：共通レイアウト構成
- `style.css`：テーマ情報とスタイル定義
- `functions.php`：スタイル・スクリプトの読み込み、アイキャッチ画像有効化など
- `js/ フォルダ`：ハンバーガーメニュー、アコーディオン動作用のJSファイル群
- `images/ フォルダ`：サイト内で使用する画像一式

## 🛠 今後の追加予定
- 固定ページ（About等）に対応する `page.php` の作成

## 💡 補足説明
本テーマには、以下の自作JavaScriptが同梱されています。

- `hamburger.js`：ハンバーガーメニュー用（jQuery使用）
- `accordion.js`：アコーディオン用（Vanilla JS、**Worksセクションで使用中**）
- `article.js`：記事の追加読み込み用（Vanilla JS、**現在は未使用**）

これらのスクリプトは、元々静的HTMLで構築していたサイトにおいて、ユーザー操作に応じた動的なUI表現（例：「もっと見る」ボタンによる記事追加表示）を実現するために実装したものです。  

現在のWordPress化された構成では `the_posts_pagination()` によるページネーションに切り替えているため一部未使用のままですが、今後 **非同期読み込みやカスタムUI（Ajaxや動的フィルター機能）** を導入する際に、再活用可能なベースコードとして保持しています。

なお、UIの種類や目的に応じて、**jQueryとVanilla JSを使い分けている点**も実装方針の特徴となっています。

## 🌐 公開URL

📌 **WordPress化したサイトはこちら → [http://news-portfolio.rf.gd/wp/]**
