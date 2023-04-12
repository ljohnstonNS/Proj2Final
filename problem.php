<?php session_start(); ?>
<?php

// First we bring them in from the from and set them as vars

//$titleFromForm = $_POST[ 'title' ];
//$fNameFromForm = $_POST[ 'fName' ];
//$fNameFromForm = $_POST[ 'lName' ];
$rolesFromForm = $_POST[ 'roles' ];


//$_SESSION[ 'title' ] = $_POST[ 'title' ];
//echo "Title from Form as session var " . $_SESSION[ 'title' ] . "<br>";
//$_SESSION[ 'fName' ] = $_POST[ 'fName' ];
//echo "fName from Form as session var " . $_SESSION[ 'fName' ] . "<br>";
//$_SESSION[ 'lName' ] = $_POST[ 'lName' ];
//echo "lName from Form as session var " . $_SESSION[ 'lName' ] . "<br>";
//$_SESSION[ 'roles' ] = $_POST[ 'roles' ];
//echo "roles from Form as session var " . $_SESSION[ 'roles' ] . "<br>";

if ( $rolesFromForm == 'ad' ) {
  header("Location: admin.php" );
  exit();
}

if ( $rolesFromForm == 'ma' ) {
  header("Location: manager.php" );
  exit();
}

if ( $rolesFromForm == 'ce' ) {
  header("Location: ceo.php" );
  exit();
}

?>
