<?php
session_start();
if(!isset($_SESSION['userdata']))
{
	header("location: ../");
}

$userdata = $_SESSION['userdata'];
$groupsdata = $_SESSION['groupsdata'];

if($_SESSION['userdata']['status']==0)
{
	$status = "<b style='color:red;'> not voted</b>";
}
else
{
	$status = "<b style='color:green;'> voted</b>";
}
?>

<!doctype html>
<html>
<head>
<style>
#backbtn
{
	float: left;
	padding:5px 10px;
	margin:5px;
	border-radius:5px;
	color:#fff;
	background:#2c76f5;
	
}
#logoutbtn
{
	float: right;
	padding:5px 10px;
	margin:5px;
	border-radius:5px;
	color:#fff;
	background:#2c76f5;
}
#profile img{
	border-radius:5px;
}
#profile
{
	background:#fff;
	padding:10px;
	width:40%;
	margin:40px;
	float:left;
}

#group
{
	background:#fff;
	padding:10px;
	width:40%;
	margin:40px;
	float:right;
}
#votebtn
{
	background:#5fb2de;
	color:#fff;
	margin:0;
	width:70px;
}
</style>
<title>Dashboad - Online Voting System</title>
<link rel="stylesheet" href="../style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<a href="../"><button id="backbtn">Back</button></a>
<a href="logout.php"><button id="logoutbtn">Logout</button></a>
<h1>Online Voting System</h1>
<div class="line"></div>
<div id="profile">
<center><img src = "../uploads/<?php echo $userdata['photo']?>" width="100px"></center><br>
<b>Name:</b><span> <?php echo $userdata['name']?></span><br><br>
<b>Mobile:</b><span> <?php echo $userdata['mobile']?></span><br><br>
<b>Address:</b><span> <?php echo $userdata['address']?></span><br><br>
<b>Status:</b><span> <?php echo $status ?></span><br><br>
</div>
<div id="group">
<?php 
			if ($_SESSION['groupsdata'])
		{
			for($i=0; $i<count($groupsdata); $i++)
			{
				?>
					<div>
						<img style= "float:right; margin:30px;" src="../uploads/<?php echo $groupsdata[$i]['photo']?>" width="50px">
						<b>Groups Name:</b><span> <?php echo $groupsdata[$i]['name']?></span><br><br>
						<b>Votes:</b><span> <?php echo $groupsdata[$i]['votes']?></span><br><br>
						<form action="../app/votes.php" method="post">
							<input type="hidden" name="gvotes" value="<?php echo$groupsdata[$i]['votes'] ?>">
							<input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id'] ?>">
							
							<?php
								if($_SESSION['userdata']['status']==0)
								{
									?>
									<input type="submit" name="votebtn" id="votebtn" value="vote">
									<?php
								}
								else{
									?>
									<input type="button" value="voted" id="votebtn">
									<?php
								}
							?>
							
							<hr>
						</form>
					</div>
				<?php
			}
			}
		else
		{
			
		}
?>
</div>
</body>
</html>