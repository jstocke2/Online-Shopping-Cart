<?php //require_once("sessionfns.php");
session_start();
if (empty($_SESSION['user']))
{  header("Location:  login.php?target="  . $_SERVER['PHP_SELF']);
   exit;

}


// taken and EDITED from WPII notes returns true if it is a device with limited screen and display
$userAgent=$_SERVER['HTTP_USER_AGENT'];
function isTablet($userAgent)
{ //global $userAgent;
if (strstr($userAgent, "iPad") ||
strstr($userAgent, "Kindle") ||
strstr($userAgent, "wOSBrowser") ||
strstr($userAgent, "Android")||
strstr($userAgent, "Tablet")
){ return true;}
return false;
}

// Tablet and phones
if (isTablet($userAgent)==true)
{

$title="Member Area"; 
$css=array("basicmobile.css", "formmobile.css");
include("rfrontmobile.php");

function processOrder()
{ 
// this implementation breaks the code
		/*
		$toothBrush -> setQuantity($_POST["toothBrush"]);
		$drone -> setQuantity($_POST["drone"]);
		$christmasTree -> setQuantity($_POST["christmasTree"]);
		$coffee -> setQuantity($_POST["coffee"]);
		$yacht -> setQuantity($_POST["yacht"]);
		$corvette -> setQuantity($_POST["corvette"]);
		*/
}

if( (empty($_POST['submit']))) 
{ session_id(md5(time() . rand() . $_SERVER['REMOTE_ADDR']));
  session_start();  // before any output 
  //include("head.inc");
  require("createnewclass.php");  // creates class type
  require("m.shopform.php");
}

elseif ($_POST['submit'] == " Enter " )  // continuing
{ session_start();  // before any output 
  //processOrder();
  //include("head.inc");
  require("createclasses.php");   // creates line item classes used in processOrder for data encapsulation
  require("m.shopform.php");
}

elseif( $_POST['submit'] == " Done " )
{ session_start(); //session_end();
  //include("head.inc");
  require("createclasses.php");
  require("checkout.php");
  
} 

elseif( $_POST['submit'] == " Revise " )
{ session_start(); //session_end();
  //include("head.inc");
  require("createclasses.php");
  require("checkout.php");
  
}
 
elseif( $_POST['submit'] == " Finalize " )
{  //session_end();
  //include("head.inc");
  //require("createclasses.php");
  //require("checkout.php");
  echo "Our vile henchman are acquiring your items for you even as we speak";

  require_once("sessionfns.php");
      session_end();
      require_once("loginfns.php");
      logout_fn();

  
} 

include("rback.php");



}
//--------------THIS is for web browsers-----------------------------------------------------------
else
{

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
		$coffee -> setQuantity($_POST["coffee"]);
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
	{ session_start();  
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
	echo "We have your order and a Drone is on the way to give you its payload mark your LZ for delivery.   
	Continue to monitor this program to ensure it doesn't SUDDENLY revert to an old state.  Note:  Our Drones are 100 percent autonomous and think for themselves.";

	require_once("sessionfns.php");
      session_end();
      require_once("loginfns.php");
      logout_fn();

  
	} 

include("rback.php");
// create else if for logout
}
?>