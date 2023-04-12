<?php include "loginCheck.php";?>
<!DOCTYPE html5>
<html>
<head>
<?php include "header.php";?>
<title>Administration</title>
</head>
<body>
<?php  include "nav.php" ?>
<main>
  <div class="city">
    <div class="log">
      <h1 class="under h1res">Admin</h1>
      <div class="logbox"><span><a href="logout.php" class="bluebtntext" title="logout">logout</a> </span></div>
    </div>
    <div>
      <p>Hello  here are your options:</p>
      <p><a href="create-account.php">Create a new account</a></p>
      <p><a href="computer-problem.php">My computer is not working</a></p>
    </div>
  </div>
</main>
<?php include "footer.php";?>
</body>
</html>
