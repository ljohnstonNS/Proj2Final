<!DOCTYPE html5>
<html>
<head>
<?php include "header.php";?>
<title>Email Sent</title>
</head>
<body>
<?php  include "nav.php" ?>
<main>
    <div class="city">
    <div class="log">
        <h1 class="under h1res">Thank you</h1>
        <div class="logbox"><span><a href="logout.php" class="bluebtntext" title="logout">logout</a> </span></div>
    </div>
    <h3>
    <?php
  
  if (isset($_POST['form_type']) && $_POST['form_type'] == 'form1') {
    
    echo 'Check your email for your new password'; // Code here for form #1
    
  } else if (isset($_POST['form_type']) && $_POST['form_type'] == 'form2') {
    
     echo 'New Account Has Been Created'; // Code here for form #2
    
  }
  
?>
    </h3>
  <p>Have a good day!</p>
    
    
    
    
    
    
    
  

   
</main>
<?php include "footer.php";?>
</body>
</html>
