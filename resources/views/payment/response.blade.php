<!-- resources/views/payment/response.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Response</title>
</head>
<body>
    <h1>Payment Response</h1>
    <p>Response from Payment API:</p>
    <pre style="color: rgb(255, 42, 0)"> {{ json_encode( $result ,JSON_PRETTY_PRINT) }}</pre>
  
</body>
</html>
