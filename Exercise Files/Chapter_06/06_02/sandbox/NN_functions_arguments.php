<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Functions: Arguments</title>
  </head>
  <body>

      <?php
        function say_hello_to($name) {
            echo "Hello {$name}!<br/>";
        }

        $name = "Ron Stoppable";
        say_hello_to($name);
      ?>

      <?php
        function better_hello($greeting, $target, $punct) {
            echo $greeting . ' ' . $target . $punct . "<br/>";
        }

        better_hello("Wassaup", $name, '!');
        better_hello("Sup", $name, '!!!');
        better_hello("Sup", $name, NULL);
      ?>

  </body>
</html>
