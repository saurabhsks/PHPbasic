<!-- 2. Creating variables
In this challenge, make another PHP page with standard HTML.
 This time, you’ll want to print “Mary had a little lamb” in the HTML element of your choice. 
 But first you should create a variable to hold “Mary” and a variable to hold “lamb” and use
  those variables to create the string you print out. -->




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>
<body>
    <h1>
    <?php
$name1="Mary";
$name2="lamb";
echo  $name1. " had a little " .$name2;

?>
    </h1>

</body>
</html>