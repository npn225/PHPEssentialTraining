<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Type Juggling and Type Casting</title>
  </head>
  <body>

      <h2>Type Juggling</h2><br/>
      <?php $count = "2 cats"; ?>
      Type: <?php echo gettype($count) . "<br/>"; ?>

      <?php $count += 3; ?>
      Type: <?php echo gettype($count) . "<br/>"; ?>

      <?php $cats = "I have " . $count . " cats!"; ?>
      Cats: <?php echo gettype($cats) . "<br/>"; ?>
      <br/>

      <h2>Type Casting</h2><br/>
      <?php settype($count, "integer"); // settype changes the type of the original variable ?>
      Count: <?php echo gettype($count) . "<br/>"; ?>

      <?php $count2 = (string) $count; // This does not change type of original variable?>
      Count: <?php echo gettype($count) . "<br/>"; ?>
      Count2: <?php echo gettype($count2) . "<br/>"; ?>
      <br/>

      <?php
        $test1 = 3;
        $test2 = 3;
        settype($test1, "string");
        (string) $test2;
        echo "Test1: " . gettype($test1) . "<br/>";
        echo "Test2: " . gettype($test2) . "<br/>";
      ?>

  </body>
</html>
