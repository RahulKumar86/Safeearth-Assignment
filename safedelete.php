<?php
$con = mysqli_connect('localhost','root','','larave');
$name = $_GET['i'];
$query = "DELETE FROM safeearth WHERE name = '$name'";
$data = mysqli_query($con,$query);
if($data){
	echo "<script>alert('record deleted')</script>";
	echo "Record deleted from table";
?>
	<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost/safedisplay.php">
	<?php
}
	else{
		echo "Sorry, delete process failed";
	}
?>