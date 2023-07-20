<!DOCTYPE html>
<html>
<body>

<?php

$response = file_get_contents('https://api.wheretheiss.at/v1/satellites');

echo $response;

$response = file_get_contents('https://randomuser.me/api/');

echo $response;

?>

</body>
</html>