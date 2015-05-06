<?php  session_start();
$realm="Welcome";
global $userAgent;


// taken and EDITED to work from WPII notes returns true if it is a device with limited screen and display
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




require_once("loginfns.php");
if ( !empty($_POST['submit']) && $_POST['submit']=="Login"
     && !empty($_SESSION['target']) )
{// process login
   if ( check_pass($_POST['uid'],$_POST['pass'],$PASSWORD_FILE) )
   {// login success
      $_SESSION['user']=$_POST['uid'];
      login_fn();
      //header("Location: " . $_SESSION['target']);
	  header("Location: shop.php");
      exit;
   }
   else  
   {// login failed
      $title="Login Failed"; 
	  
      $css=array("basic.css", "form.css");
      require("rfront.php");
      echo "<h2 class='error'>Incorrect Userid/Password </h2>";
      //      echo $_POST['uid']."  ".$_POST['pass']."  ".$PASSWORD_FILE;
      echo "<p class='error'>Please try again.</p>";
      require_once("loginform.php");
   } 
}
else // new login
{  require_once("sessionfns.php");
   https(); new_session(); logout_fn(); 
   if ( !empty($_REQUEST['target']) )
   {  $_SESSION['target']=$_REQUEST['target']; }
   else
   {  $_SESSION['target']='myprofile.php'; }
   $title="Login"; 
   if (isTablet($userAgent))
   {
		$css=array("basicmobile.css", "formmobile.css");
		require_once("rfrontmobile.php");
   }
   else
   {
		$css=array("basic.css", "form.css");
		require_once("rfront.php");
   }
   
   require_once("loginform.php");
}
require_once("rback.php"); 
?>