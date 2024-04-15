<?php
$dbc = mysqli_connect('localhost', 'root', '', 'Requests');

$data = json_decode(file_get_contents('php://input'), true);
$name = $data['name'];
$number = $data['number'];
$email = $data['email'];

$query = "INSERT INTO requests (first_name, number, email)
          VALUES ('$name', '$number', '$email')";

$result = mysqli_query($dbc, $query);

http_response_code('201');
header('Content-type: application/json');
print json_encode(array('message' => 'Request has been sent'));

mysqli_close($dbc);