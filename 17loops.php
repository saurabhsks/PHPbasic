<!--  while loop -->

<?php
$x=1;
while($x<=10){
    echo $x."\n";
    $x++;
}

?>

<!-- Do while loop -->

<?php
$x=0;
do{
    echo $x."\n";
    $x+=5;
}while($x<=100)

?>

<!-- For loop -->
<?php

for($x=0;$x<=17;$x++){
    echo " The number is $x \n";
}

?>

<!-- For each loop -->

<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value \n";
}
?>

<!-- Break -->
<?php  
for ($x = 0; $x < 10; $x++) {
  if ($x == 7) {
    break;
  }
  echo "The number is: $x \n";
}

?>

