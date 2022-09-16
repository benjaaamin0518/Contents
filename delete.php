<html>
<head>
<meta charset="UTF-8">

<title>テスト</title>
<style type="text/css">
 img{
    width:22%;
    height:100%;
    opacity:0.75;
    border:1px solid #cccccc;
}
.tt{
    width:130%;
    height:20%;
    font-size:55px;
padding:20px;
position:relative;
    border-bottom:3px solid #cccccc;
}
.tt .aiu{
position:absolute;
top:35%;
left:27%;
padding:0px;
}
 .to{
padding:40px;
width:50px;
height:50px;
}
.to2{

    font-size:45px;
    padding:10px;
}
</style>
</head>
<body>
<?php
echo "<form action='delete2.php' method='POST'>";
$fine=fopen("./tools.csv","r" );
$s=0;
$t=1;
$p=1;
while($tps=fgetcsv($fine,1000)){
    list($a[$s],$b[$s],$c[$s],$d[$s],$e[$s])=$tps;
$p++;
$s=$s+1;
}
$s--;
$p--;
$st=$s+1;
while($s>=0){
    echo "<div class='tt'><img src='".$e[$s]."'><div class='aiu'>".$st.":".$c[$s]."<input class='to' type='checkbox' value='".$t."' name='jvc".$t."' ></div></div><br>";
    $s--;
    $st--;
    $t++;
    
    }
    
echo '<input type="text" name="tt" value="'.$p.'" size="2" style="opacity:0;" readonly="readonly"><input  class="to2" type="submit" value="送信"></form>
';

?>
</body>
</html>