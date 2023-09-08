<!-- 3. Modifying data types
Here, you’ll create one variable and then assign it different values. 
Then, you’ll print those values to the browser using an echo statement. 
This statement can only include the words “The value is a”. 
Print each statement on a new line using line breaks. Your result should look like this:
The value is a string. The value is a double. The value is a boolean. The value is a integer.
 The value is a NULL. -->

 <?php
$variable = "string";
echo "The value is a $variable.<br>";

$variable = 2.5;
echo "The value is a double.<br>";

$variable = true;
echo "The value is a boolean.<br>";

$variable = 42;
echo "The value is an integer.<br>";

$variable = null;
echo "The value is NULL.<br>";
?>
