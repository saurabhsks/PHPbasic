<html>
<body>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['name'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo "Hi,your name is " .$name;
  }
}
?>

</body>
</html>