<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
  <head>
    <title>NULL</title>
  </head>
  <body>

      <?php
        // Null (NULL) value is NOT simply an empty string
        // NULL is the complete absense of any value

        $var1 = NULL;
        $var2 = "";
      ?>

      Is var1 NULL?: <?php echo is_null($var1) . "<br/>"; ?>
      Is var2 NULL?: <?php echo is_null($var2) . "<br/>"; ?>
      Is var3 NULL?: <?php echo is_null($var3) . "<br/>"; ?>
      <br/>

      Is var1 set?: <?php echo isset($var1) . "<br/>"; ?>
      Is var2 set?: <?php echo isset($var2) . "<br/>"; ?>
      Is var3 set?: <?php echo isset($var3) . "<br/>"; ?>
      <br/>

      <?php // Empty: "", '', NULL, 0, 0.0, "0", '0', false, array() ?>
      <?php $var3 = '0'; ?>
      Is var1 empty?: <?php echo empty($var1) . "<br/>"; ?>
      Is var2 empty?: <?php echo empty($var2) . "<br/>"; ?>
      Is var3 empty?: <?php echo empty($var3) . "<br/>"; ?>
      <br/>
      <?php // Be careful with use of empty!
      // Can cause bugs when you use it but want "0" to be a valid choice!
      // Will have to use empty() in conjuction with is_alphanumeric and is_null() ?>

  </body>
</html>
