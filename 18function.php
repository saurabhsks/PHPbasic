<!-- function without argument -->

<?php
function Msg(){
    echo "Hello World";
}

Msg();
?>

<!-- function with 2 arguments -->
<?php
function family($fname,$year){
    echo "$fname kumar singh.He is born in $year \n";
}

family("Saurabh", 2001);
family("Bittu", 2002);
family("Sks", 2004);
?>

<!-- Another -->

<?php
function addNumbers(int $a, int $b) {
  return $a + $b;
}
echo addNumbers(5, 15);

?>