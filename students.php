<?php
$json_str = file_get_contents("data/students.json"); // string json
$students = json_decode($json_str); // mang cac doi tuong stdClass
// chuan RESTFUL - JSON