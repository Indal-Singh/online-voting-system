<?php
include("conn.php");

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$address = $_POST['address'];
$image = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$role = $_POST['role'];


if($password==$cpassword)
{
	move_uploaded_file($tmp_name,"../uploads/$image");
	
	$query = "INSERT INTO user (name, mobile, password, address, photo, role, status, votes) VALUES ('$name', '$mobile', '$password', '$address', '$image', '$role',0,0)";


	$quInsert = mysqli_query($db_connet, $query);
	
	if($quInsert)
	{
		echo "<script>
			alert('Registration Sucessfull');
			window.location = '../index.php';		
		</script>";
	}
	else
	{
		echo "<script>
			alert('Some Error Occured');
			window.location = '../pages/new-user.php';		
		</script>";
	}
}
else
{
	echo "<script>
			alert('PassWord Does Not Match');
			window.location = '../pages/new-user.php';		
		</script>";
}
?>