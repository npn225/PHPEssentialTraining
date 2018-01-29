<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Booleans</title>
  </head>
  <body>

      <?php
        $result1 = true;
        $result2 = false;
      ?>

      Result1: <?php echo $result1 . "<br/>"; // 'true' returns value of '1' ?>
      Result2: <?php echo $result2 . "<br/>"; // 'false' returns no value ?>

      Is Result2 boolean?: <?php echo is_bool($result2) . "<br/>"; ?>
      <br/>

      <?php
        $number = 3.25;
        if (is_float($number)) :
            echo "It is a float! <br/>";
        endif;

        $number = 3;
        if (is_float($number)) :
            echo "It is a float! <br/>";
        else :
            echo "It is NOT a float! <br/>";
        endif;
      ?>
  </body>
</html>
