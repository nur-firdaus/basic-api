<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php


$response = file_get_contents('https://randomuser.me/api/');

?>

<div class="jumbotron text-center">
  <h1>Simple Get API Response</h1>
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Where The Sallites</h3>
      <p>Received Data </br>
        <?php
            $issApi = json_decode(file_get_contents('https://api.wheretheiss.at/v1/satellites'),true);
            foreach($issApi as $product){
                foreach($product as $key => $val){
                    echo "$key : $val <br/>";
                }
            }
        ?>
      </p>
    </div>
    <div class="col-sm-4">
    <h3>User Info</h3>
      <p>Received Data </br>
        <?php
            $result = json_decode(file_get_contents('https://randomuser.me/api/'),true);
            
            foreach($result['info'] as $key => $val){
                echo "$key : $val <br/>";
            }
        ?>
        <hr/>
        <?php
            echo json_encode($result['results'], JSON_PRETTY_PRINT);
        ?>
      </p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>
</body>
</html>