<!DOCTYPE html>
<html lang ="ja">
 <head>
   <meta charset="UTF-8">
   <link rel="stylesheet" type="text/css" href="style.css">
 </head>
    
    
  <body>
  
 
      
   <img src="4eachblog_logoのコピー.jpg" class="logo">
   <header>
    <div class ="menu">
      <ul>
       <li>トップ</li>
       <li>プロフィール</li>
       <li>4eachについて</li>
       <li>登録フォーム</li>
       <li>問い合わせ</li>
       <li>その他</li>
      </ul>
       
    </div>
   </header>
    
   <main>
     <div class ="main container">
     
      <div class ="left">
       <h1>プログラミングに役立つ掲示板</h1>
          
 <form method ="post" action ="insert.php">
     
  <h3>入力フォーム</h3>
     
  <div>
   <label>ハンドルネーム</label>
   <br>
   <input type ="text" class ="text" size ="35" name ="handlename">    
  </div>
     
  <div>
   <label>タイトル</label>
   <br>
   <input type ="text" class ="text" size ="35" name ="title">    
  </div>
     
  <div>
   <label>コメント</label>
   <br>
      <textarea cols ="50" rows ="10" name ="comments"></textarea>    
  </div>
     
  <div>
   <input type ="submit" class ="submit" value ="投稿する">
  </div>    
     
 </form><br>
          
　 <?php 
    mb_internal_encoding("utf8");
  $pdo=new PDO("mysql:dbname=YutaroAkasaka;host=localhost;","root","root");
  $stmt=$pdo->query("select*from 4each_keijiban");
      
  
 
 while ($row=$stmt->fetch()) {
  echo "<div class='kiji'>";
  echo "<h3>".$row['title']."</h3>";
  echo "<div class='contents'>";
  echo $row['comments'];
  echo "<div class='handlename'>posted by".$row['handlename']."</div>";
  echo "</div><br>";
  echo "</div><br>";
 }     
  
  ?>
          

  
          
         </div>
         
      <div class ="right">
          
       <h3>人気の記事</h3>
        <ul>
         <li>PHPオススメ本</li>
         <li>PHP MyAdminの使い方</li>
         <li>今人気のエディタ Top5</li>
         <li>HTMLの基礎</li>
        </ul>
        
       <h3>オススメリンク</h3>
        <ul>
         <li>インターノウス株式会社</li>
         <li>XAMPPのダウンロード</li>
         <li>Eclipseのダウンロード</li>
         <li>Bracketsのダウンロード</li>
        </ul>
        
       <h3>カテゴリ</h3>
        <ul>
         <li>HTML</li>
         <li>PHP</li>
         <li>MySQL</li>
         <li>JavaScript</li>
        </ul>  
      </div>

    </div>
    
 </main>

 <footer>copyright ©︎ internous | 4each blog the which provides A to Z about programming.</footer>
    
  
  </body>  
</html>