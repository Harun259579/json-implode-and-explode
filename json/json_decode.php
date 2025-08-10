<?php

$data = '{
	"name":"Abrar",
	"Occuption":"Developper"
}';

$a = json_decode($data,true);

header('Content-Type:application/json;charset=utf-8');
echo "{$a["name"]} is a {$a["Occuption"]}";


?>