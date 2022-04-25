<?php
session_start();
include("conn.php");

$votes = $_POST['gvotes'];
$total_votes = $votes + 1;
$gid = $_POST['gid'];
$uid = $_SESSION['userdata']['id'];

$uqurey = "UPDATE user SET votes='$total_votes' WHERE id='$gid' ";
$update_votes = mysqli_query($db_connet,$uqurey);

$ustatus = "UPDATE user SET status = 1 WHERE id='$uid'";
$update_status = mysqli_query($db_connet,$ustatus);

if($update_votes and $update_status)
{
	$groups = mysqli_query($db_connet,"SELECT * FROM user WHERE role=2");
	$groupsdata = mysqli_fetch_all($groups,MYSQLI_ASSOC);
	
	$_SESSION['userdata']['status'] = 1;
	$_SESSION['groupsdata'] = $groupsdata;
	
	echo "<script>
			alert('Voting Successfull');
			window.location = '../pages/dashboad.php';		
		</script>";
}
else
{
	echo "<script>
			alert('Something Went Wrong');
			window.location = '../pages/dashboad.php';		
		</script>";
}
?>