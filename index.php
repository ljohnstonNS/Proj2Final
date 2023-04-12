<?php include "loginCheck.php";?>
<!DOCTYPE html5>
<html>
<head>
<?php include "header.php";?>
<title>Home</title>
</head>
<body>
<?php  include "nav.php" ?>
<main>
  <div class="city">
  <div class="log">
  <h1 class="under h1res">Option selection</h1>
  <div class="logbox"><span><a href="logout.php" class="bluebtntext" title="logout">logout</a> </span></div>
    </div>
    <p>Please fill out the form.</p>
    <form  method="post" action="problem.php" class="formInline">
      <select class="selected" name="titles" id="titles"  value="<?php if(isset($_SESSION['titles'])) echo $_SESSION['titles'];?>" >
      <option name="None" value="none">None</option>
      <option name="Mrs" value="Mrs">Mrs</option>
        <option name="Miss" value="Miss">Miss</option>
        <option name="Mr" value="Mr">Mr</option>
      </select>
      <label for="fName">First name</label>
      <input type="text" name="fName"  placeholder="First Name" value="<?php if(isset($_SESSION['fName'])) echo $_SESSION['fName'];?>"  >
      <label for="lName">Last name </label>
      <input type="text" name="lName" placeholder="Last Name" value="<?php if(isset($_SESSION['lName'])) echo $_SESSION['lName'];?>"  >
      <label for="roles">Current role</label>
      <select class="selected" name="roles" id="roles"  value="<?php if(isset($_SESSION['roles'])) echo $_SESSION['roles'];?>" >
        <option name="ad" value="ad">Admin</option>
        <option name="ma" value="ma">Manager</option>
        <option name="ce" value="ce">CEO</option>
      </select>
      <button type="submit" name="save" VALUE="save" class="subBtn">Submit</button>
    </form>
  </div>
</main>
<?php include "footer.php";?>
</body>
</html>
