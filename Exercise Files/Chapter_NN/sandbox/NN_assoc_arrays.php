<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Associative Arrays</title>
  </head>
  <body>

      <?php
        $assoc = array("first_name" => "Nnamdi", "last_name" => "Nwaokorie");
        echo $assoc["first_name"] . "<br/>";
        echo $assoc["first_name"] . ' ' . $assoc["last_name"] . "<br/>";

        $assoc["first_name"] = "Billy";
        echo $assoc["first_name"] . ' ' . $assoc["last_name"] . "<br/>";

        // The two arrays below are completely identical
        // Thus, a 'normal' array is an associative array
        // It just has keys which are integers by default
        $numbers = array(4, 8, 15, 16, 23, 42);
        $numbers = array(0 => 4, 1 => 8, 2 => 15, 3 => 16, 4 => 23, 5 => 42);
        echo "<br/>" . $numbers[0] . "<br/>"; 
      ?>

  </body>
</html>
