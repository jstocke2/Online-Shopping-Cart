<?php require_once("sessionfns.php");

function processOrder()
{ $cr =  $_POST["crust"];
  if ( $cr ) {  $_SESSION['crust'] = $cr; }
  $top = $_SESSION['toppings'];
  $it = $_POST["top"];
  if ( $it && ! strstr($top,$it) ) 
  { if ( $top ) { $_SESSION['toppings'] = "$top, $it";  }
    else { $_SESSION['toppings'] = $it;  }
  }
}

if( empty($_POST['submit']) )
{ session_id(md5(time() . rand() . $_SERVER['REMOTE_ADDR']));
  session_start();  // before any output 
  $_SESSION['crust']="";
  $_SESSION['toppings']="";
  include("head.inc");
  require("orderform.php");
}
elseif ($_POST['submit'] == " Enter " )  // continuing
{ session_start();  // before any output 
  processOrder();
  include("head.inc");
  require("orderform.php");
}
elseif( $_POST['submit'] == " Done " )
{ session_start(); session_end();
  include("head.inc");
  echo '<p>Your order is complete.
        Thanks for your business.</p>';
  echo '<p><a href="">Another Order</a></p>';
} ?>
</body></html>
