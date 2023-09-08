<!-- 8. Write a function that accepts arguments
This challenge involves creating a function in PHP that accepts two numeric arguments.
 These arguments represent the height and width of a rectangle in inches.
In the function, calculate the area of the rectangle and return a sentence. 
If you pass the function parameters of 4 and 5, it should return, “This rectangle is 4 inches high and 5 inches wide and has an area of 20 square inches.” -->




<?php
function Rectangle(int $height,int $width){
    echo "This rectangle is $height inches high and $width inches wide and has an area of " .($height*$width). " square inches";
}

Rectangle(4,5);
?>