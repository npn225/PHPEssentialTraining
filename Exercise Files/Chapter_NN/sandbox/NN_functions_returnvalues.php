<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>Functions: Return Values</title>
  </head>
  <body>

      <?php
        function add($val1, $val2) {
            return $val1 + $val2;
        }

        $result1 = add(3, 4);
        $result2 = add($result1, 5);

        echo "{$result2} <br/>";
      ?>
      <br/>

      <?php
        function chinese_zodiac($year) {
            switch (($year - 4) % 12) {
                case 0: return "Rat";
                case 1: return "Ox";
                case 2: return "Tiger";
                case 3: return "Rabbit";
                case 4: return "Dragon";
                case 5: return "Snake";
                case 6: return "Horse";
                case 7: return "Goat";
                case 8: return "Monkey";
                case 9: return "Rooster";
                case 10: return "Dog";
                case 11: return "Pig";
            }
        }

        $zodiac = chinese_zodiac(2018);
        echo "2018 is the year of the {$zodiac}! <br/>";

        $zodiac = chinese_zodiac(2048);
        echo "2048 is the year of the {$zodiac}! <br/>";
      ?>
      <br/>

      <?php
        function better_hello_to($greeting, $target, $punct) {
            return $greeting . " " . $target . $punct;
        }

        echo better_hello_to("Hey", "YOU GUYSSS", "!") . "<br/>";
      ?>

  </body>
</html>
