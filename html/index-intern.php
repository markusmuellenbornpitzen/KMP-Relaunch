<!-- Get Session Parameters -->
<?php
session_start();
$username = $_SESSION['username'];
$password = $_SESSION['password'];

?>
<?php
require "partials/header.php";
 ?>

    <title>KMP Treumania GmbH Steuerberatungsgesellschaft</title>
  </head>
  <body>

<!--Code to Come -->



<?php
require "partials/navigation.php";
 ?>



<?php
require "partials/footer.php";
 ?>

  </body>
</html>






<!--Just for Testing -->

<!--

<div class="row">
  <div class="col-sm">
    Column
  </div>
  <div class="col-sm">
    Column
  </div>
  <div class="col-sm">
    Column
  </div>
</div>

-->
