<?php
// form.php
echo "Hello $_POST['fname']! Your day is $_POST['day'] today!";
echo <<<_END
  <html>
    <head>
      <meta charset="utf-8">
      <title>New Form</title>
    </head>
    <body>
      <form action="form.php" method="post">
        Full Name: <input type="text" name="fname"> <br>
        How was your day today? <input type="text" name="day"> <br>
        <input type="submit">
      </form>
    </body>
  </html>
_END;
?>
