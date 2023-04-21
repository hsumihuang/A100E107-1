<?php
include("index_mouse.php");
?>
<!DOCTYPE html>
<html lang="zh-TW">
    <head> 
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
        <title>小倉鼠的家</title>
        <meta name="keywords" content="倉鼠,倉鼠品種,倉鼠介紹,曬老鼠">
        <meta name="description" content="介紹可愛的倉鼠們！還有很多可愛的倉鼠照片。">
        <!--meta http-equiv = "refresh" content="10"-->      
        <link href="./static/css/index.css" rel="stylesheet" media="all">
        <script type="text/javascript" src="./static/js/index.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Limelight" rel="stylesheet">

    </head>

    <body>
        <div id="main"> <!-- css and js both id call -->
            <div class="objectLeft">
                <button class="openbtn" onclick="openNav()">☰
                </button> 
            </div>

            <header>
              <h1>小倉鼠的家</h1>
              <p class="clear">介紹可愛倉鼠的日常生活～</p>
            </header>

            <!-- create a collapsed sidebar: 1) add html 2) add CSS 3) add javascript
            <!-- create a collapsed sidebar: step 1) Add HTML-->
            <div class="sidebar" id="mySidebar">
                <a href="javascript:void(0)" onclick="closeNav()" class="closebtn">x</a>
                <a href="#intro" onclick="closeNav()">關於本站</a>
                <a href="#cats" onclick="closeNav()">倉鼠的品種</a>
                <a href="#profile" onclick="closeNav()">自我介紹</a>
                <a href="./survey/Hamster Survey.html" onclick="closeNav()">你家的倉鼠</a>
            </div>

            <nav>
              <ul class="menu">
                <li><a href="#intro">關於本站</a></li><!--href="#"表示目錄要讓下面的id抓取用的-->
                <li><a href="#cats">倉鼠的品種</a></li>
                <li><a href="#profile">自我介紹</a></li>
                <li><a href="./survey/Hamster Survey.html">你家的倉鼠</a></li>
              </ul>
            </nav>

            <main id="contents">

                <section id="intro">
                  <h2 class="h">關於本站</h2>
                  <p>歡迎光臨本站。<br>
                  這裡會介紹倉鼠詳細資料的網站，會有很多的倉鼠照片。<br>
                  <strong>※未經許可，請勿擅自複製轉載。</strong></p>
                </section>

                <section id="cats">
                  <h2 class="h">id</h2>

		 <?php
                     if(is_array($mouses)){
                     foreach($mouses as $row){ ?>

                  <section>
                    <h3 class="h-sub"><?php echo $row['name']??''; ?></h3>
                    <img src="img/<?php echo $row['imgName']??''; ?>" width="480" height="320" alt="羅伯羅夫斯基" class="objectLeft img-round">
                    <p> <?php echo $row['content']??''; ?></p>
                    <p class="more clear"><a href="hamster/Roborowski.html">更多介紹</a></p>
                  </section>
<?php }} ?>
                </section>


                <section id="profile" class="clearfix">
                  <h2 class="h">自我介紹</h2>
                  <!-- adopt 2 classes -->  
                  <img src="img/REX.jpg" width="250" height="250" alt="大頭照" class="img-round objectLeft">
                  <dl>
                    <dt>暱稱 ：</dt><dd>Guan-Rui Xu</dd>
                    <dt>職業 ：</dt><dd>美術工程師</dd>
                    <dt>生日 ：</dt><dd>1997年7月30日</dd>
                    <dt>mail ：</dt><dd><a href="mailto:hsumihuang@gmail.main.jp">hsumihuang@gmail.main.jp</a></dd>
                    <dt>Web  ：</dt><dd><a href="website:https://github.com/hsumihuang">https://github.com/hsumihuang</a></dd>
                  </dl>
                </section>

            </main>

            <footer>
              <p><small>小倉鼠的家 版權所有</small></p>
             
            </footer>
        </div>
        
        <audio preload autoplay loop id="vd">
          <source src="./Background music/music.mp3" type="audio/mpeg">
        </audio>

        <script type="text/javascript">
          window.onload = function(){
                   setInterval("toggleSound()",100);
              }
      
          function toggleSound() {
                      var music = document.getElementById("vd");//獲取ID  
                          
                      if (music.paused) { //判讀是否播放  
                          music.paused=false;
                          music.play(); //沒有就播放 
                      }    
              }
      </script>

        <!--create a collapsed sidebar: step 3) Add javascript -->
        
        <!--<script>
            function openNav() {
              document.getElementById("mySidebar").style.width = "250px";
              document.getElementById("main").style.marginLeft = "250px";
            }

            function closeNav() {
              document.getElementById("mySidebar").style.width = "0";
              document.getElementById("main").style.marginLeft= "0";
            }
        </script>-->
    </body>
</html>

