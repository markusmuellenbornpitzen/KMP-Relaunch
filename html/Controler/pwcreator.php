
<?php

$passwort = '123456';
$hash = password_hash($passwort, PASSWORD_DEFAULT);
echo $hash;
?>
