<!-- 6. Responding to a PHP form
You’ll create two PHP files in this challenge. The first file will contain
 a form with one form field for a user to enter their name and a button to submit the form.
  This form should use the POST method and post the results of the form to the second PHP file.
The second file should process the form data and print a greeting that looks like this,
 if the user entered “Bob” as the name: “Hi, your name is Bob”. -->

 <!DOCTYPE HTML>
<html>
<head>
    <title>Enter Your Name</title>
</head>
<body>
    <form method="post" action="process.php">
        Enter your name: <input type="text" name="name">
        <input type="submit" value="Submit">
    </form>
</body>
</html>
