<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Loops: For</title>
  </head>
  <body>

      <h5>Results of The While-Loop: </h5><br/>
      <?php // While Loop Example
        $count = 0;
        while ($count <= 10) {
            echo $count++ . ", ";
        }
      ?>
      <br/><br/><br/><br/>

      <h5>Results of The For-Loop: </h5><br/>
      <?php // For Loop Example - Has  Equivalent Output to While Loop Above
        for ($count = 0; $count <= 10; $count++) {
            echo $count . ", ";
        }
      ?>
      <br/><br/><br/><br/>

      <h5>Odd-Even Results for For-Loop: </h5><br/>
      <?php
        for ($count = 20; $count >= 0; $count--) {
            if ($count % 2) {
                echo "{$count} is odd!<br/>";
            } else {
                echo "{$count} is even!<br/>";
            }
        }
      ?>
      <br/>


  </body>
</html>
