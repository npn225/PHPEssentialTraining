<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Variables</title>
  </head>
  <body>
  <?php

    echo "Hello Worlds!<br/>";
    echo 'Hello Worlds!<br/>';

    $greeting = "Hello";
    $target = "Worlds";
    $phrase = $greeting . " " . $target . "!";
    echo $phrase . "<br/>";

  ?>

  <?php

    echo "$phrase Agian!<br/>"; // Can use variables inside double quotes!
    echo '$phrase Agian!<br/>'; // Can't use variables in single quotes!
    echo "{$phrase}Agian!<br/>"; // Can use curly brackets to strictly identify the variable in double quotes!

  ?>
  </body>
</html>
