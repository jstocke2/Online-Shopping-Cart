<?php require("loginfns.php");  https();
      require_once("regfns.php");
$PASSWORD_FILE="passwd_file.php";
$title="Recover Password"; 
$css=array("basic.css", "form.css");
//$js=array("register.js");
require("rfront.php");

$msg = 'An email was sent to your listed address with a new password.';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$user = check_user($_POST['uid'], $PASSWORD_FILE);
	$user = explode(':', $user);
	$user[0] = str_replace("// ", "", $user[0]);

	if($user)	
	{
		$pass = gen_pass(8, 2);
		change_pass($user[1], $user[2], $pass, $PASSWORD_FILE, $msg);
	 	print $msg;
		mail($user[0], "New Password", $pass, "From: jstocke2@kent.edu\r\n");	
		$msg = "Email sent with new password";
	
	} else 
	{
		$msg = $errmsg;
	}
} ?>
<form method="POST">
	<h2>Password Recovery</h2>
	<p><?php echo $errmsg ?></p>
	<div class="entry">
	<label for="uid">Userid: </label>
	<span class="field">
		<input name="uid" required size="25" autofocus id="uid" placeholder="(usernames are 5 or more charcters)">
	</span>	
	</div>
	<div class="entry">
		<label></label>
		<input type="submit" name="submit" value="Recover">
	</div>
</form>

