<!doctype html>
<html>
<head>
<title>Online Voting System - Home</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<h1>Online Voting System</h1>
<div class="line"></div>
<h2>Login</h2>
<div class="form">
<br>
<form action="app/login.php" method="post">
<input type="number" placeholder="Mobile No." name="mobile"><br>
<input type="password" placeholder="Password" name="password"><br>
<select name="role">
<option value="1">Voter</option>
<option value="2">Group</option>
</select>
<br>
<input type="submit">
<br>
<p>New User ?<a href="pages/new-user.php"> Register Here</a></p>
</form>

</div>
</body>
</html>