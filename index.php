<!DOCTYPE html>
<html>
 <head>
   <title><? echo $title; ?></title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="assets/css/style.css">
 </head>
 	<body>
     <pre>
<div class="form">
<form action="handler.php" method="POST">
<label for="login">Login</label>
<input type="text"name="login" id="login" placeholder="Enter Login">
<label for="password">Password</label>
<input type="password" name="password" id="password" placeholder="Enter Password">
<label for="passwordRepeat">Repeat password</label>
<input type="password" name="passwordRepeat" id="passwordRepeat" placeholder="Repeat Password">
<label for="userName">Surname Name Patronymic</label>
<input type="text" name="userName" id="userName" placeholder="Enter your Surname Name Patronymic">
<input type="submit" value="Enter"></p>
</form>
</div>
</pre>
  	</body> 
</html>