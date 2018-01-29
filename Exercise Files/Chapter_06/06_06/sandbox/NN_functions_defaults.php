<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Functions: Default Arguments Values</title>
  </head>
  <body>

      <?php
        // Note: Mandatory parameters should ALWAYS come before optional
        // parameters - optional paramters are ones with default values
        function paint($room = "office", $color = "blue") {
            return "The color of the house's {$room} is {$color}!<br/>";
        }

        echo paint() . "<br/>";
        echo paint("bathroom", "white") . "<br/>";

        // Not sending something and sending nothing (NULL) do NOT
        // yeild the same results
        echo paint(NULL, "white") . "<br/>";
      ?>

  </body>
</html>
