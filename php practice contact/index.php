<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>問い合わせフォームを作る</title>
        <link rel="stylesheet" type="text/css"
        href="style.css">       
    </head>
      
    <body>
<?php
mb_internal_encoding("utf8");
?>
        
<?php
    if (isset ($_POST['name']) && $_POST['name'] !=='') {
        $name = trim($_POST['name']);
            } else {
        $name ='';
        }     

    if (isset ($_POST['mail']) && $_POST['mail'] !=='') {
        $mail = trim($_POST['mail']);
            } else {
        $mail ='';
        }        

    if (isset ($_POST['comments']) && $_POST['comments'] !=='') {
        $comments = trim($_POST['comments']);
            } else {
        $comments ='';
        }        
?>
        <h1>お問い合わせフォーム2</h1>
    
 
      
    <form method="post" action="mail_confirm.php">
        <div>
            <label>名前</label>
            <br>
            
            <input type="text" class="text" size="35" name="name" value="<?php echo $name; ?>">  
                                                                     
                                                                         

                                                                         
                                                                                                       

                  
        </div>
        
        <div>
            <label>メールアドレス</label><br>
            <input type="text" class="text" size="35" name="mail" value="<?php echo $mail ; ?> ">
        </div>                    
           
        
        <div>
            <label>年齢</label>
            <br>
            <select class="dropdown" name="age" >
                <option><?php
                    
                     if ($_POST) {
                        if ($_POST['age'] != ''){
                            echo $_POST['age'];
                        } 
                     }
                    
                        ?>
                
                
                </option>
                <script>
                    for(var i = 18; i <= 65; i++){
                        document.write("<option value="+ i+">"+ i+ "歳</option>");
                    }
                </script>
            </select> 
        </div>
        
        <div>
            <label>コメント</label><br>
        <textarea cols="40" rows="10" name="comments" ><?php echo $comments ; ?></textarea>
        </div>
        
        <div>
            <input type="submit" class="submit" value="送信する">    
        </div>
        
    </form>
    
    
    
    </body>
</html>