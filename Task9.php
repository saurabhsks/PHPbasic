<!-- 9. Form and function
In this challenge, you’ll use the function that you created in the last challenge.
 Create two PHP files. One will have a form with two fields for width and height and a submit button.
  The form should use the POST method and submit to the second PHP file, which will output HTML and the result
   of the function in an H1 tag. -->

   <!DOCTYPE HTML>
<html>
<head>
    <title>Enter Dimensions</title>
</head>
<body>
    <form method="post" action="rectangle.php">
        Enter Height: <input type="number" name="height"> <br>
        Enter Width: <input type="number" name="width">
        <input type="submit" value="Submit">
    </form>
</body>
</html>  