<?php
require_once './const.php';

session_start();
//ログインしてないとき
if(!isset($_SESSION['id'])){
    //cookie消す
    // session_destroy();
    // setcookie('PHPSESSID','',time() -60 * 60);
    //商品一覧に飛ばす
    header('location: product_screen.php');
    exit;
}

//購入ボタン
if(!isset($_POST['submit'])){
    header('location: product_screen.php');
    exit;
}

//データベース
$charset = (defined('CHARSET'))? CHARSET : 'utf8';
$dsn = 'mysql:host='.HOST.';dbname='.DB_NAME.';charset='.$charset.';';
$INSERT = [];
$INSERT['purchase_date'] = date('ymd');
$INSERT['buyer_id'] = null;
try{
    //データベースに接続
    $dbh = new PDO($dsn,USER_ID,PASSWORD);
    foreach($_SESSION['cart'] as $value){
        $prepare = 'INSERT INTO purchase(product_id,buyer_id,purchase_date) VALUES(:product_id,:buyer_id,:purchase_date)';
        $stmt = $dbh -> prepare($prepare);
        $INSERT['product_id'] = $value;

        if(!$stmt -> execute($INSERT)){
            throw new PDOException('INSERTの実行に失敗しました。sqlをご確認ください。');
        }
    }
}catch(PDOException $e){
    //データベースのエラー
    echo 'エラー内容  ⇒  '.$e->getMessage();
    exit;
}
$dbh = null;

//sessionの破棄
session_destroy();
setcookie('PHPSESSID','',time() -60*60*24);

require_once 'tpl/purchase_complete.php';
?>