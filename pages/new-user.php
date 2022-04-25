<!doctype html>
<html>
<head>
<title>Registetion - Online Voting System</title>
<link rel="stylesheet" href="../style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<h1>Online Voting System</h1>
<div class="line"></div>
<h2>Registetion</h2>
<div class="form">
<br>
<form action="../app/register.php" method="post" enctype="multipart/form-data">
<input type="username" placeholder="Name" name="name">
<input type="number" placeholder="Mobile No." name="mobile"><br>
<input type="password" placeholder="Password" name="password">
<input type="password" placeholder="Confirm Password" name="cpassword"><br>
<input type="text" placeholder="Address" name="address"><br>
<lable>Upload Image: </lable>
<input type="file" name="photo" accept=".jpg,.png"><br>
<lable>Select Your Role :</lable>
<select name="role">
<option value="1">Voter</option>
<option value="2">Group</option>
</select>
<br>
<input type="submit">
<br>
<p>Alrady Ragister <a href="../index.php">Login Here</a></p>
</form>

</div>
</body>
</html>