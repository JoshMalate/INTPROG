<?php
$student = array(
    "name" =>"Raul",
    "age" => 41,
    "course" => "IT"
);

$json_data = json_encode($student);
echo $json_data;

?>