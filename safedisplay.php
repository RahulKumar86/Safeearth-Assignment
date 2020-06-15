<!DOCTYPE HTML>
<html>
	<head>
		<title>Display</title>
		<link rel="stylesheet" href="bootstrap.min.css">

		<script src="bootstrap.min.js"></script>
		<script src="angular.min.js"></script>
		<style>
		body{
			background-color:black;
			text:white;
			color:whitesmoke;
		}
			th,td,table{
				border:3px double lightgrey;
				padding:2px;
				
			}

			.containerr {
  position: relative;
  width: 100%;
}

.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.containerr:hover .image {
  opacity: 0.3;
}

.containerr:hover .middle {
  opacity: 1;
}

.textt {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
	  </style>
	  </head>
<body ng-app>
<div class="container">
		<div class="row">
		<div class="col-md-1">
		<h3 align="center"><b>Quick Links</b></h3>
        <a href="safedisplay.php">
     <div class="containerr">
	 <img src="pr1.jpg" class="img-fluid rounded-circle image">
	 <div class="middle">
     <div class="text">Display Data</div>
     </div>
     </div></a><br>
	<a href="safeinsert.php">
	 <div class="containerr">
	 <img src="pr2.jpg" class="img-fluid rounded-circle image">
	 <div class="middle">
     <div class="text">Insert Data</div>
     </div>
     </div></a>
 
	
	 
	 
	
	
	</div>


			<div class="col-md-11">
				<div class="jumbotron jumbotron-fluid text-primary">
 <h1 align="center"><b>WELCOME</b> </h1><br>
 
 
</div>

Show/Hide:<input type="checkbox" ng-model="shw">
<div ng-show="shw">
<?php
	$con = mysqli_connect('localhost','root','','larave');
    
	$query = "SELECT * from safeearth";
	$run = mysqli_query($con,$query);
	$total = mysqli_num_rows($run);

	if($total != 0){

		?>

	<table class="table table-dark table-hover table-striped">
		<tr>
			
			<th>Name</th>
            <th>Username</th>
			<th>Email</th>
			<th>Project</th>
			<th>Task</th>
            <th>Start Time</th>
            <th>End Time</th>
			
			<th colspan="2">Operations</th>
		</tr>
		<?php
			while($data = mysqli_fetch_assoc($run)){
				echo "<tr>
						
                        <td>".$data['name']."</td>
                        <td>".$data['username']."</td>
						<td>".$data['email']."</td>
						<td>".$data['project']."</td>
                        <td>".$data['task']."</td>
                        <td>".$data['starttime']."</td>
                        <td>".$data['endtime']."</td>
						
						
						<td> <a href='safeupdate.php?n=$data[name]&u=$data[username]&e=$data[email]&p=$data[project]&t=$data[task]'>Edit</a></td>
						
						<td><a href='safedelete.php?i=$data[name]'>Delete</a></td>
					                                              
					</tr>";

			}
		}else{
			echo "no record found";
		}
		?>
	</table>	
	</div>
	</div>
	
	</div>
	</div>
	</body>
	</html>
