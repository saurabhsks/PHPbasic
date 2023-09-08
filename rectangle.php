<!DOCTYPE HTML>
<html>
<head>
    <title>Rectangle Area Result</title>
</head>
<body>
    <h1>Rectangle Area Result</h1>
    
    <?php
    
    function Rectangle(int $height,int $width){
        echo "This rectangle is $height inches high and $width inches wide and has an area of " .($height*$width). " square inches";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Check if the "width" and "height" fields are set and not empty
        if (isset($_POST["width"]) && isset($_POST["height"]) && !empty($_POST["width"]) && !empty($_POST["height"])) {
            $width = $_POST["width"];
            $height = $_POST["height"];

            // Calculate the rectangle area using the function
            $result = Rectangle($height, $width);

            // Display the result in an H1 tag
            echo "<h1>$result</h1>";
        } else {
            echo "<h1>Please enter both width and height values.</h1>";
        }
    }
    ?>
</body>
</html>
