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
    $postParameter = http_build_query(
        array(
            'name' => 'Samsung ',
            'data' => array(
                'year' => 'Samsung ',
                'price' => 'doh',
                'CPU model'=> 'Intel core i10',
                'Hard disk size'=> '1 TB'
            )
        )
    );

    $headers = array(
        "X-Custom-Header: header-value",
        "Content-Type: application/json"
    );

    $postParameterJson = json_encode($postParameter);

    $curlHandle = curl_init('https://api.restful-api.dev/objects');
    curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlHandle, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curlHandle, CURLOPT_HEADER, true);

    $curlResponse = curl_exec($curlHandle);
    curl_close($curlHandle);

    


?>

<div class="jumbotron text-center"> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <?php
      echo $curlResponse;
      ?>
    </div>
  </div>
</div>
</body>
</html>