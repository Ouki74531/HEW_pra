<?php
session_start();
require_once "./const.php";
// if(isset($_SESSION['id']))
//ログインボタンが押された場合の処理
if(isset($_POST["submit"])){
    $loginID = $_POST["loginID"];
    $password = $_POST["password"];
    $link = mysqli_connect( HOST , USER_ID , PASSWORD , DB_NAME);
    mysqli_set_charset($link , 'utf8');
    $result = mysqli_query($link , "SELECT member_id , member_name , login_id , password FROM member");
    /////////////ログインIDとパスワードの整合処理///////////
    while($row = mysqli_fetch_assoc($result)){
        if($row["login_id"] == $loginID && $row["password"] == $password){
            //////////////ログインID、パスワード両方正しい場合////////////
            //  setcookie("id" , $row["member_id"] , time() + 60 * 30);
            $_SESSION['id'] = $row['member_id'];
            $_SESSION["msg"] = "ログインが完了しました";
            header("location:./product_screen.php");
            exit;
        }
    }
}
require_once "./tpl/login.php";
?>