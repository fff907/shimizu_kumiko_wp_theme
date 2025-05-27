# Shimizu Kumiko WP Theme

## ✅ 使用技術
- WordPressオリジナルテーマ開発
- PHP / HTML / CSS / Bootstrap
- GitHubと連携、ローカル環境（Local）構築済

## 📂 ファイル構成

- index.php：投稿一覧ページ（Newsセクション） ※ `the_posts_pagination()` を用いてページ送り機能を実装済
- single.php：投稿詳細ページ（※現在は各記事のリンクが外部ページに向いているため未使用）
- header.php / footer.php：共通レイアウト構成
- style.css：テーマ情報とスタイル定義
- functions.php：スタイル・スクリプトの読み込み、アイキャッチ画像有効化など
- js/ フォルダ：ハンバーガーメニュー、アコーディオン動作用のJSファイル群
- images/ フォルダ：サイト内で使用する画像一式

## 🛠 今後の追加予定
- 固定ページ（About等）に対応する `page.php` の作成

## 💡 補足説明
本テーマには、以下の自作JavaScriptが同梱されています。

- hamburger.js：ハンバーガーメニュー用（jQuery使用）
- accordion.js：アコーディオン用（Vanilla JS、**Worksセクションで使用中**）
- article.js：記事追加表示用（Vanilla JS、現在は未使用）

※元々は静的サイトで「もっと見る」ボタンにより追加の記事を表示する目的で作成。  
現在のWordPressテーマでは `the_posts_pagination()` によるページネーションを採用しているため使用していませんが、  
将来的にカスタムUIやAjax対応の読み込み機能を実装する際に活用できるよう保持しています。

※jQuery使用とVanilla JSの使い分けを意識し、状況に応じたUI実装が可能です。

## 🌐 公開URL

📌 **WordPress化したサイトはこちら → [http://news-portfolio.rf.gd/wp/]**
