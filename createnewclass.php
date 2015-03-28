

<?php
// create classes to be used in form


class LineItem 
{
	// member variables 
	private  $name;
	private  $quantity;
	private  $price;
	private  $itemTotal;
	
	// mutator member methods
	
	public function setName($Oname)
	{
		$this -> name = $Oname;
	}
	public function setPrice($Oprice)
	{
		$this -> price = $Oprice;
	}
	public function setQuantity($OQuantity)
	{
		$this -> quantity = $OQuantity;
	}
	
	
	
	
	//  accessor member methods 
	
	public function getName()
	{
		return $this -> name;
	}
	
	public function getTotal()
	{
		$this->itemTotal= ($this->price * $this -> quantity);
		return $this ->itemTotal;
	}
	
	public function getPrice()
	{
		return $this -> price;	
	}
	
	public function getQuantity()
	{
		return $this -> quantity;
	}
	
	
}



?>


<?php
// create classes and use mutators to set values



$toothBrush = new LineItem;
$toothBrush -> setName("Toothbrush");
$toothBrush -> setQuantity($_POST["toothBrush"]);
$toothBrush -> setPrice("2.00");

 
$drone = new LineItem;
$drone -> setName("Drone");
$drone -> setQuantity($_POST["drone"]);
$drone -> setPrice("150.00");


$christmasTree = new LineItem;
$christmasTree -> setName("Christmas Tree");
$christmasTree -> setQuantity($_POST["christmasTree"]);
$christmasTree -> setPrice("200.00");



$coffee = new LineItem;
$coffee-> setName("coffee");
$coffee -> setQuantity($_POST["coffee"]);
$coffee -> setPrice("20.00");


$yacht = new LineItem;
$yacht -> setName("Yacht");
$yacht -> setQuantity($_POST["yacht"]);
$yacht -> setPrice("1600.00");



$corvette = new LineItem;
$corvette -> setName("Corvette");
$corvette -> setQuantity($_POST["corvette"]);
$corvette -> setPrice("5000.00");

?>


