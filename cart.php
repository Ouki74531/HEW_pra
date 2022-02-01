<?php 
//const
require_once './const.php';
session_start();
////ログインしてないとき
if(!isset($_SESSION['id'])){
    //cookie消す
    // session_destroy();
    // setcookie('PHPSESSID','',time() -60 * 60);
    $_SESSION["msg"] = "カートを閲覧するにはログインしてください";
    //商品一覧に飛ばす
    header('location: product_screen.php');
    exit;
}


$msg = '';
$cart_list = [];
$product_cnt = count($_SESSION['cart']);
$total = 0;
$where = '';
$cnt = 0;
$total = 0;

//カートに何もない場合の処理
if(!isset($_SESSION['cart'])){
    //カートに何もない場合の処理
    $msg = "カートに商品がありません";
}
//削除ボタンが押されたとき
if(!empty($_POST['del'])){
    $product_id = $_POST['del'];
    foreach($_SESSION['cart'] as $key => $value){
        if($product_id == $value){
            unset($_SESSION['cart'][$key]);
        }
    }
    $product_cnt--;
}
//where検索用の文字列（where句）の生成
foreach($_SESSION['cart'] as $value){
    if($cnt == 0){
        $where = 'product_id='.$value;
    }else{
        $where .= ' OR product_id='.$value;
    }
    $cnt++;
}

//データベース
$charset = (defined('CHARSET'))? CHARSET : 'utf8';
$dsn = 'mysql:host='.HOST.';dbname='.DB_NAME.';charset='.$charset.';';

try{
    //データベースに接続
    $dbh = new PDO($dsn,USER_ID,PASSWORD);
    
    //商品情報の取得
    $SELECT = 'SELECT product.product_id,member.member_name,product.price,product.image,product.product_name,genre.genre_name FROM product INNER JOIN genre ON product.genre_id = genre.genre_id INNER JOIN member ON product.member_id = member.member_id WHERE '.$where;
    // $SELECT = 'SELECT product_name,price,genre_id,image FROM product WHERE '.$where;
    $stmt = $dbh -> query($SELECT);
    //sqlのqueryに失敗した場合にエラー処理
    if($stmt == false){
        $msg = 'カートに商品がありません';
    }else{
        //sqlの実行結果を配列に格納
        $cart_list = $stmt -> fetchAll(PDO::FETCH_ASSOC);
    }
}catch(PDOException $e){
    //データベースのエラー
    echo 'エラー内容  ⇒  '.$e->getMessage();
    exit;
}

//データベースの終了
$dbh = null;

//合計金額計算
if(is_array($cart_list)){
    foreach($cart_list as $value){
        $total += $value['price'];
    }
}
//ログアウトボタンが押された場合の処理
if(isset($_POST["logout"])){
    unset($_SESSION["id"]);
    header("location:./product_screen.php");
}

//表示用ファイル呼び出し
require_once './tpl/cart.php';
?>