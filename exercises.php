<?php
$a = 2;
$b = 5;

echo pow($a, $b).'<br>';
//kvadriranje
for ($i=0; $i<=10 ; $i++) {
  if ($i % 2 == 0){
    echo $i." - ";
  $res=pow($i, 2);
  echo $res.", <br>";
}
}
//kvadriranje broja 2
echo "<br><hr>kvadriranje broja 2 <br>";
for ($a=0; $a<=10 ; $a++) {
  $res1=pow(2, $a);
  echo '2 na '.$a.' = ';
  echo $res1 ."<br>";
}

echo "<br><hr>";
for($x=1;$x<=5;$x++) {
   for ($y=1;$y<=$x;$y++) {
     echo "*";
        if($y< $x) {
           echo " ";
         }
     }
 echo "<br>";
}

echo "<br><hr>";
  ?>
