<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Pointers</title>
  </head>
  <body>

      <?php
        $ages = [4, 8, 15, 16, 23, 42];

        // "Current" function - returns current pointer value
        echo "1: " . current($ages) . "<br/>";

        // "Next" function - tells pointer to move to the next item
        // Similar to using 'continue' inside a loop
        next($ages);
        echo "2: " . current($ages) . "<br/>";

        next($ages);
        next($ages);
        echo "3: " . current($ages) . "<br/>";

        // "Prev" function - tells pointer to move back an item
        prev($ages);
        echo "4: " . current($ages) . "<br/>";

        // "Reset" function - tells pointer to return to the first item
        reset($ages);
        echo "5: " . current($ages) . "<br/>";

        // "End" function - tells pointer to go to the very last item
        end($ages);
        echo "6: " . current($ages) . "<br/>";

        // Calling "next()" after "end()" results in "current()" returning NOTHING
        next($ages);
        echo "7: " . current($ages) . "<br/>";
      ?>
      <br/>

      <?php
        // Below is a while loop that loops throught array using pointers
        // This is similar to a foreach loop
        reset($ages); // This line needed since pointer is at null before this line
        while ($age = current($ages)) {
            echo "{$age}, ";
            next($ages);
        }
      ?>
  </body>
</html>
