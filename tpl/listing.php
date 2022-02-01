<!DOCTYPE html>
<html>
<head>
    <title>画面設計</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/destyle.css">
    <link rel="stylesheet" type="text/css" href="css/header.css">
    <link rel="stylesheet" type="text/css" href="css/listing.css">
    
</head>
<body>
<?php require_once "./tpl/header.php"; ?>
<main>
<ul id="side">
        <li><div class="side"><a href="./product_screen.php">TOP</a></div></li>
        <li><div class="side"><a href="">プロフィール</a></div></li>
        <li><div class="side"><a href="./purchase_history.php">購入履歴</a></div></li>
        <li><div class="side"><a href="./listing_history.php">出品履歴</a></div></li>
        </ul>
  <article>
  <div id="screen_name">
            <h1>商品情報の入力</h1>
        </div>
        
    <div>
    <form action="" method="POST" enctype="multipart/form-data">
      <section id = "image">
        <h2>商品画像</h2>
        <input type="file" name="img">
      </section>
      <section id = "category">
        <h2>カテゴリー</h2>
        
        <div class="button dropdown"> 
          <select name="genre" id="colorselector">
             <option  value="電動工具">電動工具</option>
             <option value="空圧工具">空圧工具</option>
             <option  value="計測器">計測器</option>
             <option  value="大工工具">大工工具</option>
             <option  value="油圧工具">油圧工具</option>
             <option value="研磨工具">研磨工具</option>
          </select>
        </div>
        </div>

      </section>
      <section id = "state">
        <h2>商品状態</h2>
        <div class="button dropdown"> 
          <select id="colorselector">
             <option value="red">新品、未使用</option>
             <option value="yellow">やや汚れが目立つ</option>
             <option value="blue">最悪の状態</option>
          </select>
        </div>
        
      </section>
      <section id = "explantitle">
      
            <div id="main">
            <h2>商品説明</h2>
            <section>
                <h3>商品名<small>※必須</small></h3>
                    <input type="text" name="name" class="name">
            </section>
            <section>
                <h3>価格<small>※必須</small></h3>
                <input type="text" name="price">円
            </section>
            <section>
                <h3>説明</h3>
                <textarea name="txt" id="txtarea" style="width: 600px; height: 120px;"  ></textarea>
            </section>
    </table>
    <button name="submit" value="submit" id="submit" >この情報で登録する</button>
        </section>
      </form>
  </div>
  </main>
  <footer>
        <p>copyright Tool✖︎Tool</p>
    </footer>
  </article>
  <script src="js/jquery.js"></script>
</body>
</html>