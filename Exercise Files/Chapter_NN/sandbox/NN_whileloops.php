<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Loops: While</title>
  </head>
  <body>

      <?php
        // Loop practice - does something special for five
        $count = 0;
        while ($count <= 10) {
            if ($count == 5) {
                echo "FIVE, ";
                ++$count;
            } else {
                echo $count++ . ", "; // Increment and Output on same line
            }
        }
        echo "<br/><br/>";

        // Loop practice - does different things for odd and even numbers
        $count1 = 0;
        while ($count1 <= 10) {
            if ($count1 % 2) {
                echo "ODD: " . $count1++ . "<br/>";
            } else {
                echo "EVEN: " . $count1++ . "<br/>";
            }
        }

        echo "<br/>Count: {$count}";
        echo "<br/>Count1: {$count1}";
      ?>

  </body>
</html>
