<html>
<head>
<style>
body {
  background-color: linen;
}

h1 {
  color: maroon;
}

button {
    margin-left: 20px;
}

</style>
<title>Welcome to the Service Market Place</title>
</head>

<div style="text-align:center;">
<body>

<h1 style="padding-top: 20px">Welcome to Service Marketplace</h1>

<h3>Customer Authentication</h3>

<form action = "process.php" method = "post">
    Enter your username: <input name = "login" type = "text"> <input  type = "submit" name = "signin" value = "Sign in">
    <br/>
</form>

<h3>Account Creation</h3>

<form action = "createnew.php" method = "post">
 For new users, please sign up here: <input type = "submit" value = "Sign up">
</form>

<!--

todo for aggregation and nested aggregation and division and projection
    -->

<h3>Administration</h3>

<form action = "admin.php" method = "post">
Administrator Entry:  <input  type = "submit" name = "adminsignin" value = "Continue">
</form>

</body>
</div>
<html>