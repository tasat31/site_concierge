<?php
/* For (PHP 5 >= 5.3.0, PHP 7) */

class rconDB extends SQLite3
{
    function __construct()
    {
        $this->open('site_concierge.db');
    }
}

$db = new rconDB();

$db->exec('CREATE TABLE IF NOT EXISTS rc_message (id integer primary key, message varchar(256))');

$db->exec("DELETE FROM rc_message");
$db->exec("INSERT INTO rc_message VALUES (1, 'コミュニティFM局の登録点検実績あります！')");
$db->exec("INSERT INTO rc_message VALUES (2, 'ドローン空撮用1.2GHz映像送信機の登録点検実績あります!')");
$db->exec("INSERT INTO rc_message VALUES (3, 'すべての無線局種の点検に対応します。ご相談下さい!')");
$db->exec("INSERT INTO rc_message VALUES (4, 'エリアトークの正規代理店です。')");
$db->exec("INSERT INTO rc_message VALUES (5, 'Webシステムのデザイン・制作、ご相談下さい。')");
$db->exec("INSERT INTO rc_message VALUES (6, 'Hugoで素早くサイト構築します。')");
$db->exec("INSERT INTO rc_message VALUES (7, 'MAツール・マーケロボのお取次ぎ致します。ご相談下さい。')");
$db->exec("INSERT INTO rc_message VALUES (8, '新電力のご相談もハートむせんへ')");
$db->exec("INSERT INTO rc_message VALUES (9, '新スプリアス規格対応、ご相談下さい。')");
$db->exec("INSERT INTO rc_message VALUES (10, 'FMさせぼ HappyFM 87.3MHzです。')");
$db->exec("INSERT INTO rc_message VALUES (11, 'ソフトウェア無線(SDR)でFMラジオをリスニング!')");
$db->exec("INSERT INTO rc_message VALUES (12, 'ソフトウェア無線(SDR)で航空無線をウォッチ!')");
$db->exec("INSERT INTO rc_message VALUES (13, 'MCA等自営無線システム対応します!')");
$db->exec("INSERT INTO rc_message VALUES (14, 'IP電話等自営無線システム対応します!')");
$db->exec("INSERT INTO rc_message VALUES (15, 'Python(Django)でWebバックエンド開発します。')");
$db->exec("INSERT INTO rc_message VALUES (16, 'Vue.jsでWebフロントエンド開発します。')");
$db->exec("INSERT INTO rc_message VALUES (17, 'このサイトはHugoでつくっています。')");
$db->exec("INSERT INTO rc_message VALUES (18, 'FMのスプリアス対応を実施します。')");
$db->exec("INSERT INTO rc_message VALUES (19, '統計データ分析の実施、サポート致します。')");
$db->exec("INSERT INTO rc_message VALUES (20, 'Pythonデータ分析を行います')");
$db->exec("INSERT INTO rc_message VALUES (21, 'Rデータ分析を行います。')");
$db->exec("INSERT INTO rc_message VALUES (22, '海外無線機の登録点検を実施します。')");
$db->exec("INSERT INTO rc_message VALUES (23, 'ブログやっています!')");
$db->exec("INSERT INTO rc_message VALUES (24, 'AI,IoT,ビッグデータ解析をはじめました。')");
$db->exec("INSERT INTO rc_message VALUES (25, 'DX推進サポートします。')");
$db->exec("INSERT INTO rc_message VALUES (26, 'テレワークにクラウドデスクトップをご検討下さい。')");
$db->exec("INSERT INTO rc_message VALUES (27, 'クラウドデスクトップはどこでも使えるパソコンです。')");
$db->exec("INSERT INTO rc_message VALUES (28, 'クラウドデスクトップで手軽にLinux環境で開発スタート!')");
$db->exec("INSERT INTO rc_message VALUES (29, '電波伝搬フィールド調査を実施します。')");
$db->exec("INSERT INTO rc_message VALUES (30, 'ソフトウェア無線の設計、開発を行っています。')");
$db->exec("INSERT INTO rc_message VALUES (31, '航空機局の点検、ご相談下さい。')");
$db->exec("INSERT INTO rc_message VALUES (32, '特定基幹放送局の点検、ご相談下さい。')");
$db->exec("INSERT INTO rc_message VALUES (33, '海岸局の点検、ご相談下さい。')");
$db->exec("INSERT INTO rc_message VALUES (34, '特定船舶の点検、ご相談下さい。')");
$db->exec("INSERT INTO rc_message VALUES (35, '携帯局の点検、ご相談下さい。')");
$db->exec("INSERT INTO rc_message VALUES (36, '新スプリアス規格適合スペアナを保有しています。')");
$db->exec("INSERT INTO rc_message VALUES (37, '無線局の保守・点検のご相談に対応します。')");
$db->exec("INSERT INTO rc_message VALUES (38, 'プログラミングの学習は、クラウドデスクトップをご検討下さい。')");
$db->exec("INSERT INTO rc_message VALUES (39, '統計データ解析のため、RStudioをセットアップします。')");
$db->exec("INSERT INTO rc_message VALUES (40, 'エッジデバイスからクラウドサーバまでアプリケーション開発します。')");
$db->exec("INSERT INTO rc_message VALUES (41, 'スマート農業にチェレンジ中')");
$db->exec("INSERT INTO rc_message VALUES (42, '5G時代のアプリケーション開発')");
$db->exec("INSERT INTO rc_message VALUES (43, 'HTML/CSS/Javascriptコーディング対応します。')");
$db->exec("INSERT INTO rc_message VALUES (44, 'ローパワー(低電力)で省エネ無線局を運用')");
$db->exec("INSERT INTO rc_message VALUES (45, '新電力でCO2排出量削減')");
$db->exec("INSERT INTO rc_message VALUES (46, '業務用ドローンの登録点検、ご相談下さい。')");
$db->exec("INSERT INTO rc_message VALUES (47, '鹿児島県垂水市の公式イメージキャラクター・「たるたる」です。')");
$db->exec("INSERT INTO rc_message VALUES (48, 'ハートと心をつなぐハートむせん')");
$db->exec("INSERT INTO rc_message VALUES (49, '防災無線の導入でBCP対策')");
$db->exec("INSERT INTO rc_message VALUES (50, '省エネ、地球温暖化防止に努めます。')");

echo "rainbow concierge migration completed"
?>
