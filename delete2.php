<?php
error_reporting(0);
echo '<a href="delete.php" style="font-size:80px;">トップへ戻る</a>
';
$aja=1;
$tt=$_POST["tt"];
$fp2=fopen("tools.csv","r");

while($ts=fgetcsv($fp2,1000)){
list($a[$aja],$b[$aja],$c[$aja],$d[$aja],$e[$aja])=$ts;

$aja++;

}
$aja--;
$to=1;
$fp3=fopen("tools.csv","r");

while($ts2=fgetcsv($fp3,1000)){
list($a[$aja],$b[$aja],$c[$aja],$d[$aja],$e[$aja])=$ts2;
if($tt==0){
break;

}

else if($tt==$_POST["jvc$aja"]){
    echo $to.':'.$c[$aja];
$to++;
    $tt--;
$aja--;

}
else if($_POST["jvc$aja"]==false){
    $wp[]="$a[$aja],$b[$aja],$c[$aja],$d[$aja],$e[$aja]\n";
$to++;
$tt--;
$aja--;
}

}
$ss=fopen("tools.csv","w");
foreach($wp as $value){
    fwrite($ss,$value);
}
fclose($ss);


fclose($fp2);
?>