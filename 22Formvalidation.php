<!-- Form Validation -->

<!DOCTYPE HTML>
<html>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    Name:<input type="text" name="fname"><br>
    E-mail:<input type="text" name="email"><br>
    <input type="submit">



</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['fname'];
  $ename = $_REQUEST['email'];
  if (empty($name)) {
    echo "Name is empty";
  } else if(empty($ename)){
    echo "Email is empty";
    
  }
  else{
    echo "Welcome " .$name. "<br>";
    echo "Your email address is: " .$ename;
  }
}
?>
</body>

</html>