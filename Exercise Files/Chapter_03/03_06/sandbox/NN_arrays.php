<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Arrays</title>
  </head>
  <body>
      <?php

        $numbers = array(4, 8 , 15, 16, 23, 42);
        echo $numbers[0] . "<br/>";
        echo $numbers[1] . "<br/>";
        echo "<br/>";

        $mixed = array(6, "fox", "dog", array('X', 'Y', 'Z'));
        echo $mixed[2] . "<br/>";
        // echo $mixed[3] . "<br/>"; // Cannot simply echo out an array
        // echo $mixed . "<br/>";    // Cannot simply echo out an array
        echo "<br/>";

      ?>

      <?php echo $mixed[3][1]; "<br/>"; ?>

      <?php $mixed[2] = "cat"; ?>
      <?php $mixed[4] = "mouse"; ?>
      <?php $mixed[] = "horse"; ?>

      <!-- Pre allows the array to be outputted visually better! -->
      <pre>
          <?php
            echo print_r($mixed) . "<br/>"; // Use "print_r" function to display Arrays
          ?>
      </pre>
      <br/>

      <?php
        // PHP 5.4 and after has the short array syntax
        $array = [1, 2, 3];
        echo print_r($array) . "<br/>";
      ?>

  </body>
</html>
