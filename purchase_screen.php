<?php
session_start();
//ログインしてないとき
if(!isset($_SESSION['id'])){
    //cookie消す
    // session_destroy();
    // setcookie('PHPSESSID','',time() -60 * 60);
    //商品一覧に飛ばす
    $_SESSION["msg"] = "決済画面を閲覧するにはログインしてください";
    header('location: product_screen.php');
    exit;
}
if(isset($_POST["submit"])){
    $_SESSION["msg"] = "購入が完了しました";
    header("location:./product_screen.php");
    exit;
}
$list = [];
$list[] = "沖縄";
$list[] = "鹿児島";
$list[] = "宮崎";
$list[] = "熊本";
$list[] = "大分";
$list[] = "長崎";
$list[] = "佐賀";
$list[] = "福岡";
$list[] = "山口";
$list[] = "広島";
$list[] = "島根";
$list[] = "鳥取";
$list[] = "岡山";
$list[] = "愛媛";
$list[] = "高知";
$list[] = "徳島";
$list[] = "香川";
$list[] = "兵庫";
$list[] = "京都";
$list[] = "大阪";
$list[] = "滋賀";
$list[] = "奈良";
$list[] = "和歌山";
$list[] = "三重";
$list[] = "愛知";
$list[] = "福井";
$list[] = "岐阜";
$list[] = "石川";
$list[] = "富山";
$list[] = "長野";
$list[] = "新潟";
$list[] = "長野";
$list[] = "山梨";
$list[] = "静岡";
$list[] = "神奈川";
$list[] = "東京";
$list[] = "埼玉";
$list[] = "千葉";
$list[] = "群馬";
$list[] = "栃木";
$list[] = "茨城";
$list[] = "福島";
$list[] = "山形";
$list[] = "宮城";
$list[] = "岩手";
$list[] = "秋田";
$list[] = "青森";
$list[] = "北海道";
require_once "./tpl/purchase_screen.php";
?>