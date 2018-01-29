<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Functions: Defining</title>
  </head>
  <body>

      <?php
        function say_hello() {
            echo "Hello Worlds!<br/> ";
        }

        say_hello();

        function say_hello_to($name) {
            echo "Hello {$name}!<br/> ";
        }

        say_hello_to("Mike");
        say_hello_to("Mikal");

        say_hello_to_loudly("Mikal"); // Can call a function above its function definition

        function say_hello_to_loudly($name) {
            $name2 = strtoupper($name);
            echo "HELLO {$name2}!<br/> ";
        }

      ?>

  </body>
</html>
