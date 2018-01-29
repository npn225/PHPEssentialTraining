<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Functions: Scope</title>
  </head>
  <body>

      <?php
        $bar = "outside"; // Global Scope
        $dod = 1;

        function foo() {
            GLOBAL $bar, $dod; // Gives foo() function access to global '$bar' variable
            if (isset($bar)) {
                echo "foo: " . $bar . "<br/>";
            }
            $bar = "inside"; // Local Scope
            ++$dod;
        }

        echo "1: {$bar} <br/>";
        foo();
        echo "2: {$bar}<br/>";
        echo "3: {$dod}<br/>";
      ?>

  </body>
</html>
