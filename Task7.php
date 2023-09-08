<!-- 7. Looping an array
In this challenge, first, create an array that contains the following city names:
Tokyo, Mexico City, New York City, Mumbai, Seoul, Shanghai, Lagos, Buenos Aires, Cairo, London
Print the values to the browser separated by commas using a loop to iterate over the array.
 Sort the array and then print the values to the browser again using a loop. Next, add these city names to the array:
Los Angeles, Calcutta, Osaka, Beijing
Then sort the array again and print the values using a for loop. -->


<?php
$city = array("Tokyo ", "Mexico City ", "New York City ","Mumbai " , "Seoul ", "Shanghai ", "Lagos ", "Buenos Aires  ", "Cairo", "London ");
$arrlength = count($city);

for($x=0; $x<$arrlength;$x++){
      echo $city[$x];           
                        //    Printing the citynames
}
echo "\n";
sort($city); // sorting the city name using sort function

for($x=0; $x<$arrlength;$x++){
    echo $city[$x];           
                         // Printing the citynames in sorted order
}

$addedcity=array("Los Angeles", "Calcutta", "Osaka", "Beijing"); // additional cities to add

// Merge the two arrays
$city = array_merge($city, $addedcity);

sort($city);  // sorted again after adding more cities
$arrlength1=count($city); // finding length of new city array 

for($x=0;$x<$arrlength1;$x++){
    echo $city[$x]."\n";     // printing city in ascending order
}

?>