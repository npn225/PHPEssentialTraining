<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Continue</title>
  </head>
  <body>

      <?php  // Continue used with For-Loop
        for ($count = 0; $count <= 10 ; $count++) {
            if (!($count % 2)) {
                continue;
            }
            echo "{$count}, ";
        }
      ?>
      <br/>

      <?php  // Continue used with While-Loop
        $count = 0;
        while ($count <= 10) {
            if ($count === 5) {
                ++$count;
                continue;
            }
            echo $count++ . ", ";
        }
      ?>
      <br/>

      <?php // Continue used with loop inside a loop
        for ($index = 0; $index <= 5 ; $index++) {
            if (!($index % 2)) { continue(1); }
            for ($jindex = 0; $jindex <= 5 ; $jindex++) {
                if ($jindex === 3) { continue(2);  }
                echo "{$index}-{$jindex}<br/>";
            }
        }
      ?>

  </body>
</html>
