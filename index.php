<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>POSTのサンプル</title>
    <link rel="stylesheet" href="sample.css">
  </head>
  <body>
    <?php
      //comment,nameがPOSTされているなら
      if(isset($_POST["comment"]) && isset($_POST["name"])){
        //エスケープしてから表示
        $comment = htmlspecialchars($_POST["comment"]);
        $name = htmlspecialchars($_POST["name"]);
        print(" ${name} のコメントは「 ${comment} 」です。");
      } else {
    ?>
        <p class="blue">名前を入力してください。</p>
        <form method="POST" action="index.php">
          <input name="name" />
        <p id="red">コメントしてください。</p>
        <form method="POST" action="index.php">
          <input name="comment" />
          <input type="submit" value="送信" />
        </form>
    <?php
      }
    ?>
  </body>
</html>