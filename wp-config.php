<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'LAA1316029-blog' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'LAA1316029' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'osuiti0717' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(3eZwxZa~+l$y`cUB:+dU:`kK,8rjFEx 8ntu}h:1%!+C,R)}u^l_[ #bYUz7,)5' );
define( 'SECURE_AUTH_KEY',  'dLPaAp?lWnB(d4Z^WpY!MENV/[+BhpZw.KfvJ|~xnR.g~!p;M4cHk2I3c]R|]w5X' );
define( 'LOGGED_IN_KEY',    'i(vTu%_. 41i:inv GOkgkaV`/DCI2fl?pO6%O6a5rn6?a>?8(kwcCbS3Sx|K:Pb' );
define( 'NONCE_KEY',        '2]j*Pm#lIPOx@zsy98Q[h,.#p#eMYTm!y_${O**>5G#j7`uPeGgubXD(AMHG0:]j' );
define( 'AUTH_SALT',        'WpaAw-=:,5!wB=hTj:ew8$=dWDmPIZrU^o{<YFKC$FIHiLs@xjy?o65#o3z7|%-u' );
define( 'SECURE_AUTH_SALT', '#m46@Banu00@6?-22_1;kLcmWvM=5)f.CB?*X1 ]BF`H%9P28oU,D8;+}NjS302s' );
define( 'LOGGED_IN_SALT',   '`rKP;v4@W>&moyyEq?sD6Nam<AYwxg*~p+tjf9~bDP-M1U!U~Lx9P`dZY(!ngcfn' );
define( 'NONCE_SALT',       '#L(dAoMQH2UsP<j=O>9VI$?0A:i}*Pp6<~`bXi%TC&z.XHr<F]Xw,)rZuZV|2% c' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
