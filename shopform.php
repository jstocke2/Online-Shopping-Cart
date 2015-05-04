<h3>Your Nefarious Things Order:</h3>





<div style="float: left; width:100px;">
<form method="POST" action="" >
<p>Choose:
<br><br>


<input id="toothBrush" type="text" name="toothBrush" value = "1"/>
<label for="toothBrush">Toothbrush</label>
<br><br>
<input id="drone" type="text" name="drone" value = "1" />
<label for="drone">Drone</label>
<br><br>
<input id="christmasTree" type="text" name="christmasTree" value = "1" />
<label for="christmasTree">Christmas Tree</label>
<br><br>
<input id="coffee" type="text" name="coffee" value = "1" />
<label for="coffee">coffee</label>
<br><br>
<input id="yacht" type="text" name="yacht" value = "1" />
<label for="yacht">Yacht</label>
<br><br>
<input id="corvette" type="text" name="corvette" value = "1" />
<label for="corvette">Corvette</label>
<br><br>

<input type="submit" name="submit" value=" Enter " /> 
<input type="submit" name="submit" value=" Done " action="" /></p>
</form>
</div>


<?php
//  store form data in session for retrieval 
		$_SESSION["toothBrush"] = $_POST["toothBrush"];
	
	
	
		$_SESSION["drone"] = $_POST["drone"];
	
	
	
		$_SESSION["christmasTree"] = $_POST["christmasTree"];
	
	
	
		$_SESSION["coffee"]= $_POST["coffee"];
	
	
	
		$_SESSION["yacht"]= $_POST["yacht"];
	
	
	
		$_SESSION["corvette"] = $_POST["corvette"];
	
	
	
?>





<?php
if ($_SESSION["toothBrush"])
{
$toothBrush = new LineItem;
$toothBrush -> setName("Toothbrush");
$toothBrush -> setQuantity($_SESSION["toothBrush"]);
$toothBrush -> setPrice("2.00");
}

if ($_SESSION["drone"])
{ 
$drone = new LineItem;
$drone -> setName("Drone");
$drone -> setQuantity($_SESSION["drone"]);
$drone -> setPrice("150.00");
}
if ($_SESSION["christmasTree"]){
$christmasTree = new LineItem;
$christmasTree -> setName("Christmas Tree");
$christmasTree -> setQuantity($_SESSION["christmasTree"]);
$christmasTree -> setPrice("200.00");
}

if ($_SESSION["coffee"]){
$coffee = new LineItem;
$coffee-> setName("coffee");
$coffee -> setQuantity($_SESSION["coffee"]);
$coffee -> setPrice("20.00");
}

if ($_SESSION["yacht"]){
$yacht = new LineItem;
$yacht -> setName("Yacht");
$yacht -> setQuantity($_SESSION["yacht"]);
$yacht -> setPrice("1600.00");
}

if ($_SESSION["corvette"]){
$corvette = new LineItem;
$corvette -> setName("Corvette");
$corvette -> setQuantity($_SESSION["corvette"]);
$corvette -> setPrice("5000.00");
}
?>

<div style="float: right; top:0;">


<table style="width:100%" border = "1px solid black">
  <tr>
    <td>Item</td>
    <td>Quantity</td> 
    <td>Price</td>
	<td>Total Price</td>
  </tr>
  <tr>
    <td><?php print $toothBrush ->getName(); ?></td>
    <td><?php print $toothBrush ->getQuantity(); ?></td> 
    <td><?php print $toothBrush ->getPrice(); ?></td>
	<td><?php print $toothBrush ->getTotal(); ?></td>
	
  </tr>
  <tr>
    <td><?php print $drone ->getName(); ?></td>
    <td><?php print $drone ->getQuantity(); ?></td> 
	<td><?php print $drone ->getPrice(); ?></td>
    <td><?php print $drone ->getTotal(); ?></td>
  </tr>
  <tr>
    <td><?php print $christmasTree ->getName(); ?></td>
    <td><?php print $christmasTree ->getQuantity(); ?></td> 
	<td><?php print $christmasTree ->getPrice(); ?></td>
    <td><?php print $christmasTree ->getTotal(); ?></td>
  </tr>
  <tr>
    <td><?php print $coffee ->getName(); ?></td>
    <td><?php print $coffee ->getQuantity(); ?></td> 
	<td><?php print $coffee ->getPrice(); ?></td>
    <td><?php print $coffee ->getTotal(); ?></td>
  </tr>
  <tr>
    <td><?php print $yacht ->getName(); ?></td>
    <td><?php print $yacht ->getQuantity(); ?></td> 
	<td><?php print $yacht ->getPrice(); ?></td>
    <td><?php print $yacht ->getTotal(); ?></td>
  </tr>
  <tr>
    <td><?php print $corvette ->getName(); ?></td>
    <td><?php print $corvette ->getQuantity(); ?></td> 
	<td><?php print $corvette ->getPrice(); ?></td>
    <td><?php print $corvette ->getTotal(); ?></td>
  </tr>
</table>

<?php
$total = ($toothBrush -> getTotal() + $drone -> getTotal() + $christmasTree -> getTotal() + $coffee -> getTotal()+ $yacht -> getTotal() + $corvette -> getTotal());
echo "Grand Total: $ $total ";
$grandTotal = $total;
// have to test for session id change inbetween
// sets new value if there is a change from default value of 1

?>

<?php
//  store form data in session for retrieval 
	if ($_POST["toothBrush"] != 1)
	{
		$_SESSION["toothBrush"] = $_POST["toothBrush"];
	}
	if ($_POST["drone"] != 1)
	{
		$_SESSION["drone"] = $_POST["drone"];
	}
	if ($_POST["christmasTree"] != 1)
	{
		$_SESSION["christmasTree"] = $_POST["christmasTree"];
	}
	if ($_POST["coffee"] != 1)
	{
		$_SESSION["coffee"]= $_POST["coffee"];
	}
	if ($_POST["corvette"] != 1)
	{
		$_SESSION["corvette"] = $_POST["corvette"];
	}
	
	
?>


</div>

