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
<div id="loader-bg">
  <div id="loader">
    <img src="359-88.gif" />
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>

$(function () {
  const h = $(window).height();
  $("#loader-bg ,#loader").height(h).css("display", "block"); //ローディング画像を表示
});
$(window).on("load", function () {
  // 読み込み完了したら実行する
  $("#loader").delay(1200).fadeOut(300); // ローディングをフェードアウト
  $("#loader-bg").delay(1500).fadeOut(800); // 背景色をフェードアウト
});

</script>
    <style>
        #loader-bg {
  background-color: #fff;
  height: 100%;
  left: 0px;
  position: fixed;
  top: 0px;
  width: 100%;
  z-index: 100;
}
#loader-bg img {
    background-color: #ffffff;
padding:15px;
border-radius:25px;
box-shadow:7px 7px 15px #999999;

  left: 50%;
  position: fixed;
  top: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  z-index: 100;
}
        .aiu{
background-color: #cccccc;
opacity:0.7;
width:100%;
height:100%;
position:absolute;
top:0px;
left:0px;
}
.aiu img{
    position:absolute;
    top:30%;
    width:18%;
    height:9%;
background-color: #ffffff;
padding:15px;
border-radius:25px;
box-shadow:7px 7px 15px #999999;
}

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
font-size: 17px;
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

    color:white;

text-decoration:none;

 
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
.out{
    font-family:sans-serif;

width:90%;
height:80px;
background-color:#F5A9A9;
color:#ff0000;
border:2px solid #ff0000;
padding:10px;
border-radius:10px;
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
error_reporting(0);
$sara=$_POST["sara"];

$s=1;
$fgo=1;
if($_POST["title"]){
    echo '<a href="core.html">トップページへ戻る</a><br>';  


    $soc=1;
$api=0;
while($sara>=$soc){

    $sdg=$_FILES["dada$soc"]['name'];
    
    $sdg2=$_FILES["dada$soc"]['type'];
    
    $sdg3=$_FILES["dada$soc"]['tmp_name'];
    
    $sdg4=$sdg;
    
    if(($sdg2=='image/jpeg')||($sdg2=='image/png')||($sdg2=='image/pjpeg')){
    $soc++;

    }
    else{
        $api++;
        break;
    }
    }
if($api>=1){

    echo '<br><br><div class="out">正しく入力されていません。<br>もう一度やり直してください。</div><br><a href="toukou.html">投稿ページへ戻る</a><br>';

}
else{
    $spi=1;
    while($sara>=$spi){

        $sdg=$_FILES["dada$spi"]['name'];
        
        $sdg2=$_FILES["dada$spi"]['type'];
        
        $sdg3=$_FILES["dada$spi"]['tmp_name'];
        
        $sdg4=$sdg;
        
        if(($sdg2=='image/jpeg')||($sdg2=='image/png')||($sdg2=='image/pjpeg')){
        
        $fight=move_uploaded_file($sdg3,$sdg4);
        $spi++;
    
        }
        }
    



$ap=1;
$ip=0;
$vp=0;
$fso3=@fopen('./tools.csv',"r");

while($get4=fgetcsv($fso3,1000)){

    list($a[$vp],$b[$vp],$c[$vp],$d[$vp],$e[$vp])=$get4;

$vp=1+$vp;

}
$vp=$vp-1;
$vp2=$vp;
$ass=$vp;
$p=0;
echo "<i>テストコード:<br></i>";
while($ip==0){
    echo "first:con$ap.html<br>";

while($vp>-1&&$ass>=-1){
    $file3="con$ap.html";
if($file3==$a[$vp]){
echo "a:".$a[$vp]."<br>";
$p++;
break;

}
else{
    echo "b:".$a[$vp].":<b>ass:$ass</b><br>";
    $vp--;
    $ass--;
    
}
}
$file4="con$ap.html";

if(file_exists($file4)==0&&$p==0){
    echo "c:".$file4."<br>";
    $ip++;
}
else{
    echo "d:".$file4."<br>";
$vp=$vp2;
$p=0;
$ass=$vp2;
    $ap++;
}


}



$sdga=$_FILES["dada1"]['name'];
$year=date('Y');

$month=date('n');

$day=date('j');

$hour=date('H');

$mini=date('i');
$sdp=@fopen("zyouhou$ap.html","w");
$pdf='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="twitter:card" content="summary_large_image"> 
    <meta name="twitter:site" content="@nytimes"> 
    <meta name="twitter:creator" content="@SarahMaslinNir"> 
    <meta name="twitter:title" content="'.h($_POST["title"]).'の詳細
"> <meta name="twitter:description" content="
"> 
<meta name="twitter:image:src" content="http://hr10dan21534.php.xdomain.jp/contents/'.$sdga.'">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="sheet2.css">
    <title>Document</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <script type="text/javascript">  
    function switchByWidth(){
        if (window.matchMedia("(max-width: 767px)").matches) {
    
        } else if (window.matchMedia("(min-width:768px)").matches) {
            location.href="out.html";
        }
    }
    
    //ロードとリサイズの両方で同じ処理を付与する
    window.onload = switchByWidth;
    window.onresize = switchByWidth;
        
$("head").append(
    "<style>.tp1 {display:none;}</style>"
);
$(window).load(function() {
    $(".tp1").fadeIn("slow");
});

    </script>
    <style type="text/css">
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
<h2>
   '.h($_POST["title"]).' 
</h2>
「'.h($_POST["title"]).'」に関する情報です。<br><br>
<center>
    <img src="'.$sdga.'">
    <br><br>
<div class="bb">タイトル:'.h($_POST["title"]).'</div>

<div class="bb">更新日時:'.$year.'/'.$month.'/'.$day.'/'.$hour.':'.$mini.'</div>
<div class="bb">画像枚数:'.$sara.'枚</div>
<div class="bb">サムネ画像:'.$sdga.'</div>
<br>
</center>
</div>
</div>

<div class="copy">&copy; 2019 <u>CONTENTS!</u> ALL Rights reserved</div>
</body>
</html>';
fputs($sdp,$pdf);
fclose($sdp);
$ppp=1;
$sarap=$sara+1;
$sdg11=$_FILES["dada1"]['name'];

$fps=@fopen("con$ap.html","w");
$sp='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="twitter:card" content="summary_large_image"> 
    <meta name="twitter:site" content="@nytimes"> 
    <meta name="twitter:creator" content="@SarahMaslinNir"> 
    <meta name="twitter:title" content="'.h($_POST["title"]).'
"> <meta name="twitter:description" content="
"> 
<meta name="twitter:image:src" content="http://hr10dan21534.php.xdomain.jp/contents/'.$sdg11.'">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sheet.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>'.h($_POST["title"]).'</title>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <script type="text/javascript">    function switchByWidth(){
        if (window.matchMedia("(max-width: 767px)").matches) {
    
        } else if (window.matchMedia("(min-width:768px)").matches) {
            location.href="out.html";
        }
    }
    
    //ロードとリサイズの両方で同じ処理を付与する
    window.onload = switchByWidth;
    window.onresize = switchByWidth;';
fputs($fps,$sp);

$sp2='    $(function(){

    var sd3='.$sara.',sd4=1,sd5=100;
    jQuery(".psv").on("click", function() {
        jQuery("#ghq a."+sd4).css("opacity","1");
    
        if(sd3>sd4 ){
            sd4++;
    sd5=10+sd5;
      jQuery("li."+sd4).css("z-index", sd5);
      jQuery("#ghq a."+sd4).css("opacity","0");
    
        }
    });    
    jQuery(".psv2").on("click", function() {
        jQuery("#ghq a."+sd4).css("opacity","1");
    
        if( sd4>=2){
            sd4--;
            sd5=10+sd5;
    
    jQuery("li."+sd4).css("z-index", sd5);
    jQuery("#ghq a."+sd4).css("opacity","0");
    
        }
    });   ';
    fputs($fps,$sp2);
while($ppp<=$sara){
$sp3='jQuery("a.'.$ppp.'").on("click", function() {
    jQuery("#ghq a."+sd4).css("opacity","1");
        sd4='.$ppp.';
        sd5=10+sd5;


jQuery("li."+sd4).css("z-index", sd5);
jQuery("#ghq a."+sd4).css("opacity","0");

});    ';
fputs($fps,$sp3);
$ppp++;
}
$sp4=' $(document).ready(function(){
    $(".back").delay(2000).fadeOut("slow");});
});
</script></head>
<body>
        <a href="#" class="psv"></a>  
        <a href="#" class="psv2"></a>  

         <div id="flickscroll">
                <ul>';
fputs($fps,$sp4);
$ff=1;
while($sara>=$ff){
    $sdg=$_FILES["dada$ff"]['name'];

    if($ff==1){
        $sp5='<li class="'.$ff.'" style="z-index:60;"><img src="'.$sdg.'"alt="" /></li>';
fputs($fps,$sp5);

$ff++;
    }
    else{
$sp5='<li class="'.$ff.'"><img src="'.$sdg.'"alt="" /></li>';
fputs($fps,$sp5);


    $ff++;
    }
}
$sp6='                </ul>
</div>
<label class="toggle" for="open"><i class="fa fa-bars" aria-hidden="true">
    <div class="aiu">menu</div>
</label>

<input id="open" type="checkbox">
<div id="ghq">

  <nav>
        <label class="toggle" for="open"><i class="fa fa-bars" aria-hidden="true">
                <div class="aiu2">×閉じる</div>
            </label>

        <div class="sd1">タイトル</div>                        <div class="sd2">'.h($_POST["title"]).'</div>
        <div class="sd1">ページ</div> 

        <div class="gnav">                                <ul >';
fputs($fps,$sp6);
$cc=1;
while($sara>=$cc){
    $sdg=$_FILES["dada$cc"]['name'];

    if($cc==1){
$sp7='<li ><a href="#" class="'.$cc.'"  style="opacity:0.0;"><img src="'.$sdg.'" alt="" /><span>'.$cc.'</span></a></li>';
fputs($fps,$sp7);
        $cc++;
    }


else{
    $sp7='<li ><a href="#" class="'.$cc.'" ><img src="'.$sdg.'" alt="" /><span>'.$cc.'</span></a></li>';
    fputs($fps,$sp7);
    
$cc++;
}
}
$sp8='                        </ul></nav>
</nav>



</div>
<div class="back">左側：次<br>右側：前</div>
</body>
</html>';
fputs($fps,$sp8);
fclose($fps);
$log=array("con$ap.html",$sara,$_POST["title"],"zyouhou$ap.html",$sdga);

$fen=@fopen("./tools.csv","a");

fputcsv($fen,$log);

fclose($fen);

}
}

else{
    echo '<br><div class="out">正しく入力されていません。<br>もう一度やり直してください。</div><br><a href="toukou.html">投稿ページへ戻る</a><br>';
    }
    



    function h($s) {
        return htmlspecialchars($s, ENT_QUOTES, "UTF-8");
        }



?>
</div>
</div>
<div class="copy">&copy; 2019 <u>CONTENTS!</u> ALL Rights reserved</div>
</body>
</html>
