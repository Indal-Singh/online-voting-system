<?php

$servername="localhost";
$user="root";
$password="";
$db_name="voting";

$db_connet= mysqli_connect ( $servername, $user, $password,$db_name );

if($db_connet)
{
	//echo "connected";
}
else
{
	echo "not connected";
}
?>