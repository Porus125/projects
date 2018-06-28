<?php include('connection.php'); ?>
<?php

$name = $_GET['color'];
echo $name;
$sql1="delete from order_details where order_id=$name";
$query1=mysqli_query($con,$sql1);
	if($query1==false)
		echo "delete not worked.";
		else 
		{	echo "delete worked";
		//	sleep(5);
	//		header('location: ship_status.php');
//exit;
		}
	
// optional
// echo "You chose the following color(s): <br>";

//foreach ($name as $color){ 
    //echo $color."<br />";
//}

?>
<html>
<body>
<h1 style="text-color:red;"> delivery successful!!!!;</h1>
</body>
</html>
