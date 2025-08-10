<?php
// session type of container nirdisto somoyer jonno data store rakhe somoy ses a clear hoye jay.
session_start(); 
$_SESSION['username']="Abrar"; //session variable
printf("User NAme is %s.",$_SESSION['username']);

unset($_SESSION['username']); //seesion valiable clear kora
printf("User NAme is %s.",$_SESSION['username']);

echo "<br>";

echo "Your SEssion Identification Number ".session_id();


?>

<?php
echo "<br>";


$_SESSION['mysession'] = "Abrar";

$_SESSION['LOggedon'] = date('Y-m-d h:i:s');

$sessionencode = session_encode();

echo $sessionencode;

?>