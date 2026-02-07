# Grewai HP WordPress Theme

## インストール手順
1. このリポジトリ一式を `wp-content/themes/grewai-hp` など任意のテーマディレクトリに配置します。
2. WordPress管理画面の「外観 > テーマ」から `Grewai HP Minimal` を有効化します。
3. 「固定ページ」を以下のスラッグで作成します。
   - トップページ: Front Page（タイトルは任意）
   - 研修について: `training`
   - 活用事例: `cases`
   - 考え方・FAQ: `faq`
   - 実践者としての背景: `background`
4. 「設定 > 表示設定」でトップページを固定ページに設定し、Front Page を割り当てます。

## テンプレート対応
- `front-page.php`: トップページ
- `page-training.php`: 研修について
- `page-cases.php`: 活用事例
- `page-faq.php`: 考え方・FAQ
- `page-background.php`: 実践者としての背景

## 画像/SVG
`assets/` 内にSVGを同梱しています。外部画像は使用していません。
