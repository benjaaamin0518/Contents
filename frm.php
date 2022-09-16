<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="twitter:card" content="summary_large_image"> 
    <meta name="twitter:site" content="@nytimes"> 
    <meta name="twitter:creator" content="@SarahMaslinNir"> 
    <meta name="twitter:title" content="CONTENTS!　-作品の投稿や閲覧が行えるサイト。-
"> <meta name="twitter:description" content="
"> 
<meta name="twitter:image:src" content="http://hr10dan21534.php.xdomain.jp/kskjg.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <script type="text/javascript">  
    
$('head').append(
    '<style type="text/css">.tp1 {display:none;}</style>'
);
$(window).load(function() {
    $('.tp1').fadeIn("slow");
});

</script>
    <style>
        body{

background-color:#f3f2f2;

        }
    .menu{
        position:absolute;
        top:0px;
        left:0px;

width:100%;
height:75px;
background-color:white;
z-index:100000;

    }
    .menu img{
        position:absolute;
        top:8px;
        left:10px;

        width:50%;
        height:60px;
    }
    #bar{
        position:absolute;
        top:0px;
        left:283px;
width:25%;
height:75px;
background-color:#ff82b2d8;
list-style:none;
z-index:100000000000;
    }
    #bar li{
        width:30px;

        position:relative;
        left:25px;
top:18px;
line-height:15px;
font-size:45px;
font-weight:800;
color:white;
border-radius:15px;
    }
    .tp1{
        position:relative;
        top:100px;
        left:5px;
        border-radius:8px;
        box-shadow:5px 5px 10px #2e2e2e54;
width:92%;
background-color:#ffffff;
font-size: 13px;
padding:10px;
z-index:100;
    }
    .tp2{
        position:relative;
        top:-10px;

        font-family:sans-serif;
line-height:35px;
color:#2e2e2ece;




    }
    #ghq {
  position: fixed;
  left:0px;
 top: -100px; /* メニューのwidth + padding */
  width: 100%; /* メニューのwidth */
  height: 50px;

z-index:1000;
font-family:sans-serif;

  list-style:none;
  transition: top .5s, bottom .5s; /* アニメーション */
  background-color:#ff82b2d8;
}
#ghq li{
width: 50px;
height:50px;
position:relative;
top:15px;
left:-50px;
list-style:none;
margin-left:15px;
float:left;
text-decoration:none;
font-size:20px;
font-family:sans-serif;

}
#ghq li {
    position:relative;
    top:-10px;

    text-align: center;
width:100%;
height:50px;
color:white;
font-family:sans-serif;
z-index:10000000;

padding:4px;
}

 #ghq li a{
text-decoration:none;
color:white;

 
 }
.toggle {
  cursor: pointer;
  font-family:sans-serif;

}
 
.toggle:hover {
}
 
#open {
  display: none;
}
 
#open:checked + #ghq {
  top:73px;

}
.out{
width:90%;
height:80px;
background-color:#F5A9A9;
color:#ff0000;
border:2px solid #ff0000;
padding:10px;
font-family:sans-serif;

border-radius:10px;
}

.copy{
    position:relative;
top:200px;

width:100%;
background-color:#ffffff;
color:#2e2e2e;
font-size:12px;
padding:10px;
text-align:center;
font-family:sans-serif;

}
    </style>
</head>
<body>
<div class="menu"><img src="kskjg.png">

</div>   

<label class="toggle" for="open"><i class="fa fa-bars" aria-hidden="true">
        <div id="bar"><li>ー</li><li>ー</li><li>ー</li></div>
    </label>
    
    <input id="open" type="checkbox">
    <div id="ghq">

      <nav>

            <div class="gnav">                                <ul >
                <li ><a href="core.html">トップページ</a></li>

            </ul></nav>
      </nav>
    
    
    
    </div>

<div class="tp1"><br>
<div class="tp2">
<?php
$sara=$_POST["sara"];
if($sara==0){


}
else{
    echo '<form action="frm2.php" method="POST" enctype="multipart/form-data"><br>    ';
}
    ?>
タイトル(14文字以内)：<br>
<input type="text" name="title" style="font-size:23px;padding:5px;" maxlength="14"><br>
<br>画像(20枚以内)：<br><br>
<?php
$p=1;
$text=file("./maisuu.txt");
$sara=$_POST["sara"];
if($sara==0||$sara>$text[0]){
    echo '<div class="out">正しく入力されていません。<br>もう一度やり直してください。</div><br><a href="toukou.html">戻る</a><br>';


}
else{
while($p<=$sara){
echo $p.'枚目：<input   name="dada'.$p.'" type="file" / ><br />';
$p++;
}
echo '<br><input  type="text" style="font-size:14px;width:50px;appearance:none;background:none;border:none;"readonly="readonly" name="sara" value="'.$sara.'">個の画像<br><br>
<input type="submit" id="submit" value="アップロード"  size="5"></form>';
}

?>

</div>
</div>
<div class="copy">&copy; 2019 <u>CONTENTS!</u> ALL Rights reserved</div>
</body>
</html>
