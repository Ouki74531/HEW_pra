<?php
session_start();
require_once "./const.php";
//登録ボタンが押された場合の処理
if(isset($_POST["submit"])){
    $name = $_POST["up_name"].$_POST['down_name'];//名前
    $address = $_POST["prefectures"].$_POST["address1"].$_POST["address2"].$_POST["address3"];//住所
    $tel = (int)$_POST["tell"];//電話番号
    $birthday = (int)$_POST["birthday"];//誕生日
    $mail = $_POST["mail"];//メールアドレス
    $loginID = $_POST["loginID"];//ログインID
    $password = $_POST["password"];//パスワード
     
    //データベース接続処理
    $link = mysqli_connect(HOST , USER_ID , PASSWORD , DB_NAME);
    mysqli_set_charset($link , 'utf8');
    if(mysqli_query($link,'INSERT INTO member(member_name,member_address,tel_num,birthday,mail,bank_card,member_class,listing_id,login_id,password) VALUES("'.$name.'","'.$address.'",'.$tel.','.$birthday.',"'.$mail.'",NULL,NULL,NULL,"'.$loginID.'","'.$password.'")')){
        $_SESSION["msg"] = "会員登録が完了しました";
        header("location:./product_screen.php");
        exit;
    }
    mysqli_close($link);
    //INSERT INTO member(member_name , member_address , tel_num , birthday , mail , bank_card , member_class , listing_id , login_id , password) VALUES(あ , 　大阪 , 123456 , 123456, 12345@gmail.com , NULL , NULL , NULL , ouki0704 , 'ouki39741206';
}

require_once "./tpl/member_regist.php";
?>