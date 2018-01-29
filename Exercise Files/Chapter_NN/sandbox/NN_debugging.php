<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Debugging</title>
  </head>
  <body>

      <?php
        $number = 99;
        $string = "Bug?";
        $array = [1 => "Homepage", 2 => "About Us", 3 => "Services"];

        // var_dump() - returns everything that PHP knows about the variable
        var_dump($number);
        echo "<br/>";
        var_dump($string);
        echo "<br/>";
        var_dump($array);
        echo "<br/>";
        echo "<br/>";
      ?>
      <br/>

      <pre>
          <?php
            // get_defined_vars() - returns an array of all variables that have been defined
            // Use print_r() on get_defined_vars() since get_defined_vars() returns an array
            print_r(get_defined_vars());
          ?>
      </pre>
      <br/>

      <pre>
          <?php
            // debug_backtrace() - returns an array which is a report of the function
            // calls that have been made and lead up to a certain moment in time
            function say_hello_to($name) {
                echo "Hello {$name}!<br/>";
                var_dump(debug_backtrace());
            }

            say_hello_to("Everybody");
          ?>
      </pre>
  </body>
</html>
