<!-- 5. Create a multiplication table using nested for loops
For this challenge, you’ll print a multiplication table to the browser for all numbers up to and including 12.
 To do this, use two for loops, one nested inside of the other. Make sure you use table, td, and tr HTML tags
to create a valid HTML table. -->


<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>
    <table border="1">
        <caption>Multiplication Table</caption>
        <tr>
            <!-- <th>&times;</th> -->
            <?php
            // Header row: Display the numbers from 1 to 12
            for ($i = 1; $i <= 12; $i++) {
                echo "<th>$i</th>";
            }
            ?>
        </tr>
        <?php
        // Generate the multiplication table rows
        for ($i = 1; $i <= 12; $i++) {
            echo "<tr>";
            echo "<th>$i</th>"; // Row header with the leftmost number
            for ($j = 1; $j <= 12; $j++) {
                $result = $i * $j;
                echo "<td>$result</td>"; // Table data cell with the result
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
