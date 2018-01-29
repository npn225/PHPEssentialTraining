<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Break</title>
  </head>
  <body>

      <?php
        for ($count = 0; $count <= 10 ; $count++) {
            if ($count === 5) { break; }
            echo "{$count},  ";
        }
      ?>
      <br/>

      <?php  // Break with loop in loop

        for ($index = 0; $index <= 5 ; $index++) {
            if (!($index % 2)) { continue(1); }
            for ($kindex = 0; $kindex <= 5 ; $kindex++) {
                if ($kindex === 3) { break(2); }
                echo "{$index}-{$kindex}<br/>";
            }
        }

      ?>

  </body>
</html>
