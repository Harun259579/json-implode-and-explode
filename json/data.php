<?php
$filename="data.json";

$data = file_get_contents($filename); // others technology date use krte file_get_contents() use hoy

header('Content-Type:application/json;charset=utf-8');
echo $data;

?>