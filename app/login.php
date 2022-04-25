<?php
session_start();
include ("conn.php");

$mobile = $_POST['mobile'];
$password = $_POST['password'];
$role = $_POST['role'];

$quCheck = "SELECT * FROM user WHERE mobile='$mobile' AND password='$password' AND role='$role'";

$check = mysqli_query($db_connet,$quCheck);


if (mysqli_num_rows($check)>0)
{
	$userdata = mysqli_fetch_array($check);
	$groupsCheck = "SELECT * FROM user WHERE role=2";
	$groups = mysqli_query($db_connet,$groupsCheck);
	$groupsdata = mysqli_fetch_all($groups,MYSQLI_ASSOC);
	
	$_SESSION['userdata'] = $userdata;
	$_SESSION['groupsdata'] = $groupsdata;

		echo "<script>
			window.location = '../pages/dashboad.php';		
		</script>";
}
else
{
	echo "<script>
			alert('User Not Found');
			window.location = '../';		
		</script>";
}
?>