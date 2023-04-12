<?php include "loginCheck.php";?>
<!DOCTYPE html5>
<html>
<head>
<?php include "header.php";?>
<title>New Account</title>
</head>
<body>
<?php  include "nav.php" ?>
<main>
    <div class="city">
    <div class="log">
        <h1 class="under h1res">Create an Account</h1>
        <div class="logbox"><span><a href="logout.php" class="bluebtntext" title="logout">logout</a> </span></div>
    </div>
<p>Please submit the form below to create a new account</p>
<form class="formLog" action="sent-email.php" method="post">
  
<label for="userName">User name </label>
    <input type="text" name="userName" />
    <label for="email">Email address</label>
    <input type="email" name="email" />
    <label for="password">Password</label>
    <input type="password" name="password" />
    <input type="hidden" name="form_type" value="form2">
    <input type="submit" name="submit" value="Submit" /> 
</form>
</div>
</main>
<?php include "footer.php";?>
</body>
</html>
