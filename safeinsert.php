<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="bootstrap.min.css">

		<script src="bootstrap.min.js"></script>
<meta charset="UTF-8">
<title>Register Form</title>
<style>
th,td,table{
    border:2px double black;
}


body{
			background-color:black;
			color:whitesmoke;
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
<body>

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
<div class="jumbotron text-primary">
<h2 align="center"><b> Your details  </b>
</h2>
</div>

<form action="safereg.php" method="post">
<table class="table table-dark table-hover table-striped">
    
    <tr>
       <th> <label for="Name">Name:</label></th>
      <td>  <input type="text" name="name" id="name"></td>
    </tr>
     <tr>
        <th><label for="Username">Username:</label></th>
       <td> <input type="text" name="Username" id="Username"></td>
    </tr>
    <tr>
    <th> <label for="Project">Project:</label></th>
      <td>  <input type="text" name="Project" id="Project"></td>
    </tr>
    <tr>
       <th><label for="task">Task:</label></th>
       <td><input type="text" name="Task" id="Task"></td>
    </tr>
    <tr>
       <th><label for="starttime">Start Date:</label></th>
       <td><input type="date" name="starttime" id="starttime"></td>
    </tr>
    <tr>
       <th><label for="endtime">End Date:</label></th>
       <td><input type="date" name="endtime" id="endtime"></td>
    </tr>
    <tr>
       <th> <label for="emailAddress">Email Address:</label></th>
       <td> <input type="text" name="email" id="email"></td>
    </tr>
    <tr>

    <td><input type="submit" value="Submit"></td>
    <td> <a href="safedisplay.php">RETURN  </a>   </td>
    </tr>
    </table>
    </div>
    </div>
    </div>
</form>
</body>
</html>
