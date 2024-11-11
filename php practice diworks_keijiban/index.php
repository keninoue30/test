<!doctype HTML>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">  
    </head>

 
<body>

    <?php
    
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    $stmt = $pdo->query("select* from diworks_keijiban");
    
    ?>
   
    
    <div class="top">
        <img src="diblog_logo.jpg">   
    </div>
    
<header>
    <div class="logo">
        <ul>
            <li>トップ</li>
            <li>プロフィールについて</li>
            <li>D.I.Blogについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </div>
    
</header>

<main>
 
    <div class="left">
        
        <h1>プログラミングに役立つ掲示板</h1>    
        
    
        
    <form method="post" action="insert.php",>
        <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" required class="text" size="35" name="handlename"
                    > 
     
            <?php 
//        $handlename= "handlename" ;
//        if($handlename=0){
//            echo 1111 ;}
        ?>
            
          
        
        </div>
        
        <div>
            <label>タイトル</label><br>
            <input type="text" required class="text" size="35" name="title">
        </div>                    
        
        <div>
            <label>コメント</label><br>
            <textarea cols="35" required rows="7" name="comments"></textarea>
        </div>
        
        <div>
            <input type="submit" class="submit" value="投稿する">    
        </div>
        
    </form>
  
    <div class=kiji2>
    <?php
    
        while($row = $stmt->fetch()){
           
            echo "<div class='kiji'>";
            echo "<h5>".$row['title']."</h5>";
            echo "<div class='comments'>"; 
            echo $row['comments'];
            echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
            echo "</div> ";
            echo "</div> ";        
        }
    
    ?>
    
        </div>  
    
        
        
    </div>
        
    <div class="right">
    <br><br>
    <h2>人気の記事</h2>
        
        <div class="menu1">
         PHPオススメ本<br>
         PHP MyAdominの使い方<br>
         今人気のエディタTops<br>
         HTMLの基礎
        </div>
    
    <h3>オススメリンク</h3>
        
        <div class="menu2">
         ﾃﾞｨｰｱｲﾜｰｸｽ株式会社<br>
         XAMPPのダウンロード<br>
         Eclipseのダウンロード<br>
         Bracketsのダウンロード
        </div>
        
    <h4>カテゴリ</h4>
        <div class="menu3">
          HTML<br>
          PHP<br>
          MySQL<br>
          JavaScript<br>
         </div>
    </div>
    
</main>
</body>



    
    
    
<footer>
 Copyright D.Iworks| D.I blog is the one which provides A to Z about programming
</footer>
