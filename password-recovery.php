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
        <h1 class="under h1res">Password Recovery</h1>
        <div class="logbox"><span><a href="logout.php" class="bluebtntext" title="logout">logout</a> </span></div>
    </div>
<p>Please submit the form below with the information assocated with your account</p>
<form class="formLog" action="sent-email.php" method="post">
  
<label for="userName">User name </label>
    <input type="text" name="userName" />
    <label for="email">Email address</label>
    <input   type="email" name="email" />
    <input type="hidden" name="form_type" value="form1">
   <input type="submit" name="submit" value="Submit" />
  
</form>
</div>
</main>
<?php include "footer.php";?>
</body>
</html>
