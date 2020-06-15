<?php 

$conn = mysqli_connect("localhost", "root", "", "larave");
 
$name=$username=$project=$task=$email=$starttime=$endtime="";
if($conn === false){
   // die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$username = mysqli_real_escape_string($conn, $_REQUEST['Username']);
$project = mysqli_real_escape_string($conn, $_REQUEST['Project']);
$name = mysqli_real_escape_string($conn, $_REQUEST['name']);
$task = mysqli_real_escape_string($conn, $_REQUEST['Task']);
$starttime = mysqli_real_escape_string($conn, $_REQUEST['starttime']);
$endtime = mysqli_real_escape_string($conn, $_REQUEST['endtime']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);

 

$sql = "INSERT INTO safeearth (name,username,email,project,task,starttime,endtime) VALUES ('$name', '$username', '$email', '$project', '$task','$starttime','$endtime')";
if(mysqli_query($conn, $sql)){
    echo "Record added successfully.";
} 
 

mysqli_close($conn);
?>