<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Loops:  Foreach</title>
  </head>
  <body>

      <?php  // Foreach for normal arrays
        $ages = array(4, 8, 15, 16, 23, 42);

        foreach ($ages as $age) {
            echo "Age: {$age}<br/>";
        }
      ?>
      <br/>

      <?php  // Foreach for associative arrays
        $person = array(
            "first_name" => "Nnamdi",
            "last_name" => "Nwaokorie",
            "address" => "123 Sesame Street",
            "city" => "Brooklyn",
            "state" => "New York",
            "zipcode" => "90210"
        );

        foreach ($person as $key => $value) {
            $key_nice = ucwords( str_replace("_", " ", $key) );
            echo "{$key_nice}: {$value}<br/>";
        }
      ?>
      <br/>

      <?php  // Another Foreach Loop used on an Associative Array
        $prices = array(
            "Brand New Computer" => 2000,
            "One Month of Lynda.com" => 30,
            "Learning PHP" => NULL
        );

        foreach ($prices as $item => $price) {
            echo "{$item}: ";
            if (is_numeric($price)) {
                echo "\${$price}<br/>"; // Variable $price becomes undefined when you put it in a string
            } else {
                echo "Priceless!<br/>";
            }
        }
      ?>
      <br/>


  </body>
</html>
