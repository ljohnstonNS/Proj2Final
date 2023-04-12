<?php session_start(); /* Starts the session */
      
        /* Check Login form submitted */        
        if(isset($_POST['Submit'])){
                /* Define username and associated password array */
                $logins = array('demo' => '123');
                
                /* Check and assign submitted Username and Password to new variable */
                $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
                $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
                
                /* Check Username and Password existence in defined array */            
                if (isset($logins[$Username]) && $logins[$Username] == $Password){
                        /* Success: Set session variables and redirect to Protected page  */
                        $_SESSION['UserData']['Username']=$logins[$Username];
                        header("location:index.php");
                        exit;
                } else {
                        /*Unsuccessful attempt: Set error message */
                        $msg="<span style='color:red'>Invalid Login</span>";
                }
        }
?>

<!DOCTYPE html5>
<html>
<head>
<?php include "header.php";?>
<title>Welcome - Login</title>
</head>
<body>
<?php  include "nav.php" ?>
<main>
<div class="city">
<div class="log">
  <h1 class="under h1res">Welcome to PHP 101</h1>
  <div class="logbox"><span><a href="logout.php" class="bluebtntext" title="logout">logout</a> </span></div>
    </div>
  <h3>Where you may or may not know what you are doing</h3>
  <p>Please login to view this lovely project.</p>

<form action="" method="post" class="formLog" name="Login_Form">
  <?php if(isset($msg)){?>
  <div class="fdiv"> <?php echo $msg;?> </div>
  <?php } ?>
  <label for="Username">Username</label>
  <input name="Username" type="text" class="Input">
  <label for="Password">Password</label>
  <input name="Password" type="password" class="Input">
  <input name="Submit" type="submit" value="Login">
</form>
<div>
  <p>
    Username:demo <br>
    Password:123</p>
</div>
</div>
</main>
<?php include "footer.php";?>
</body>
</html>