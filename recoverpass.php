<?php session_start();
if ( empty($_SESSION['user']) )
{  header("Location: login.php?target=" . $_SERVER['PHP_SELF']);
   exit;
}
require_once('regfns.php');
require_once('loginfns.php');

if (!empty($_POST['submit']) && $_POST['submit']=="Change Now")
{  
$new_pass = gen_pass(); //from loginfns.php
//if $_SESSION['pass'] does not work, try function check_pass(&$id,&$pass,&$file) vv
//change_passwd($_SESSION['user'],$_SESSION['pass'],$new_pass,$PASSWORD_FILE, $errmsg)
//change the password
$done=false;
//NOT IN SESSION, $PASSWORD_FILE IS NOT ACTIVE?
$lines=file($PASSWORD_FILE);
  if ( $f=@fopen($PASSWORD_FILE, "w") )
  { foreach($lines as $line)
    { if ( !$done && strstr($line, "$id:") )
      { $pass_hash=crypt($pass, '$2a$09$dynamicwebdesign$');
        preg_match("/(.*):/", $line, $matches);
        $prefix = $matches[1];
        $line="$prefix:" . $pass_hash . "\n";
        $done=true;
      }
      fwrite($f, $line);
    }
    fclose($f);
  }
//password changed

// Check for errors?
			$to = $_POST['email'];
			$subject ='Your Temporary Password';
			$message = 'Your new password is' . $new_pass;
			$headers = 'From: webdev@kent.edu' . "\r\n" .
			    'Reply-To: WebDev' . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();

			mail($to, $subject, $message, $headers);


/*
pass_check($_POST['pass']);
   pass_match($_POST['pass'],$_POST['pass2']);
   nomatch($_POST['oldpass'],$_POST['pass']);
   if ( empty($errmsg) &&
        change_passwd($_SESSION['user'],$_POST['oldpass'],
	     $_POST['pass'],$PASSWORD_FILE,$errmsg) )
   {  $msg="Password recovery complete.";  }
     else
   {  $msg="Password recovery failed. " . $errmsg;  }
*/
}

$title="Password Recovery"; 
$css=array("basic.css","form.css");
require("rfront.php");
?>
<h2>Password Recovery for <?php echo $_SESSION['user']; ?></h2>
<p class="error"><?php echo $msg; ?></p>
<?php require("rback.php"); ?>

CHANGE!!!!!!!!!!!!!!
find out how to find email registered
add email fn to regfns.php?
get_email(
NOT IN SESSION, HOW DO YOU ACCESS FILE?