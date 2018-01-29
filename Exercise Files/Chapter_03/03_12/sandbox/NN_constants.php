<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Constants</title>
  </head>
  <body>

      <?php
        $max_width = 980;  // Defining a variable

        define("MAX_WIDTH", 980); // Defining a constant
        echo MAX_WIDTH . "<br/>"; // Don't need quotes after constant has been defined

        // Cannot change the value of a constant
        // MAX_WIDTH = 1;
        // echo MAX_WIDTH;

        // Cannot redefine a constant
        define("MAX_WIDTH", 981);
        echo MAX_WIDTH . "<br/>";
      ?>

  </body>
</html>
