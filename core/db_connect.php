<?php
   $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME)
   OR die('Could not connect to MySQL ' .
          mysqli_connect_error());
?>
