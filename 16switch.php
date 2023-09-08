<?php
echo "Enter the color ";
//$favcolor="red"; // assigned input 
$favcolor = trim(fgets(STDIN)); // taking input from the user

switch($favcolor){
    case "red":
        echo "your favorite color is red";
        break;
    case "blue":
        echo "your favorite color is blue";
        break;    
    case "green":
        echo "your favorite color is green";
        break; 
    default:
        echo "Your favorite color is neither red, blue, nor green!";
        break;        
}
?>