<!-- 4. Using if, else, and elseif
For this challenge, write a script that gets the current month and then prints out the season using
 if, else, and elseif. You don’t have to worry about the exact date of the season switch.
 Count June, July, and August as summer, and September, October, and November as fall.
  Count December, January, and February as winter, and March, April, and May as spring. -->

  <?php
// Prompt the user for input
echo "Enter the month name: ";

// Read a line of input from the user
$userInput = trim(fgets(STDIN));

// Display the input
if($userInput==="December" || $userInput==="January"|| $userInput==="February" ){
    echo "winter";
} elseif($userInput==="March" || $userInput==="April"|| $userInput==="May" ){
    echo "spring";
}
elseif($userInput==="June" || $userInput==="July"|| $userInput==="August" ){
    echo "summer";
}
elseif($userInput==="September" || $userInput==="October"|| $userInput==="November" ){
    echo "fall";
}
else{
    echo "Not a valid month";
}
?>
