<?php //require_once("sessionfns.php");
session_start();
if (empty($_SESSION['user']))
{  header("Location:  login.php?target="  . $_SERVER['PHP_SELF']);
   exit;

}

$title="Member Area"; 
$css=array("basic.css", "form.css");
include("rfront.php");

function processOrder()
{ 
// this implementation breaks the code
		/*
		$toothBrush -> setQuantity($_POST["toothBrush"]);
		$drone -> setQuantity($_POST["drone"]);
		$christmasTree -> setQuantity($_POST["christmasTree"]);
		$crack -> setQuantity($_POST["crack"]);
		$yacht -> setQuantity($_POST["yacht"]);
		$corvette -> setQuantity($_POST["corvette"]);
		*/
}

if( (empty($_POST['submit']))) 
{ session_id(md5(time() . rand() . $_SERVER['REMOTE_ADDR']));
  session_start();  // before any output 
  include("head.inc");
  require("createnewclass.php");  // creates class type
  require("shopform.php");
}

elseif ($_POST['submit'] == " Enter " )  // continuing
{ session_start();  // before any output 
  //processOrder();
  include("head.inc");
  require("createclasses.php");   // creates line item classes used in processOrder for data encapsulation
  require("shopform.php");
}

elseif( $_POST['submit'] == " Done " )
{ session_start(); //session_end();
  include("head.inc");
  require("createclasses.php");
  require("checkout.php");
  
} 

elseif( $_POST['submit'] == " Revise " )
{ session_start(); //session_end();
  include("head.inc");
  require("createclasses.php");
  require("checkout.php");
  
}
 
elseif( $_POST['submit'] == " Finalize " )
{  //session_end();
  include("head.inc");
  //require("createclasses.php");
  //require("checkout.php");
  echo "Our vile henchman are acquiring your items for you even as we speak";

  require_once("sessionfns.php");
      session_end();
      require_once("loginfns.php");
      logout_fn();

  
} 

include("rback.php");
// create else if for logout
?>

