<?php
$json_string = '{"name":"Rodrigo","age":21,"email":"Rodrigo@example.com"}';
$student_object = json_decode($json_string);
$student_array = json_decode($json_string, true);
echo "Object: " . $student_object->name . "<br>"; 
echo "Array: " . $student_array["email"];          
?>