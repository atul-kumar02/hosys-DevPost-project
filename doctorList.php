<html>
<head>
	<title>Doctor List</title>
	<link rel="stylesheet" type="text/css" href="form.css"></link>
	<link rel="stylesheet" type="text/css" href="design.css">	
</head>
<style>
	@font-face {
	font-family: myfirst;
	src: url(Dosis-Regular.ttf);
	}
	@font-face {
		font-family: myfirst1;
		src: url(Cabin-Regular.ttf);
	}
	table {
	    border-collapse: collapse;
	    width: 100%;
	    margin-top: 100px;
	    background-color: #0080FF;
	}

	th {
	    height: 50px;
	    border: 3px solid #f1f1f1;
	    color: white;
	    font-family: myfirst;
	}
	td{
		padding-left: 80px;
		color: white;
		border: 3px solid #f1f1f1;
		font-family: myfirst1;
	}
</style>
<body>
	<div class="head">
		<ul>
			<li><a class="icon" href="index.php">HOSPITAL APPOINTMENT SYSTEM</a></li> 
			<li><a class="SearchDoctor" href="docotrList.php">Search Doctor</a></li>
			<li><a class="TakeAppointment" href="takeAppointment.html">Take Appointment</a></li>
			<li><a class="TakeAppointment" href="adminPanel.html">Admin Panel</a></li>
			<li style="float:right; margin-right:15px; padding-top:5px;" ><img src="../images/medicallogo.png" height="60px" width="70px"></li>
		</ul>
	</div>
	<?php
		$servername = getenv("OPENSHIFT_MYSQL_DB_HOST").":".getenv("OPENSHIFT_MYSQL_DB_PORT");
		$username = getenv("OPENSHIFT_MYSQL_DB_USERNAME");
		$password = getenv("OPENSHIFT_MYSQL_DB_PASSWORD");
		$dbname = getenv("OPENSHIFT_MYSQL_DB_NAME");
		echo "hii narendra ! ";
		echo "servername : ".$servername." ,  username : ".$username." , password : ".$password." , dbname : ".$dbname;
		/*$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
		    die("Connection failed Sorry yr: " . $conn->connect_error);
		}
		else
			echo "you did it man!!";
		//echo "Mukesh";
		//$openshiftsocket = getenv('OPENSHIFT_MYSQL_DB_SOCKET');
		//echo "OpenShift socket is [$openshiftsocket]";

	/*if (isset($openshiftsocket)) {
   		echo 'foo';
   		ini_set('mysql.default_socket', $openshiftsocket);
	}
		/*$dbhost = constant("DB_HOST"); // Host name 
		$dbport = constant("DB_PORT"); // Host port
		$dbusername = constant("DB_USER"); // Mysql username 
		$dbpassword = constant("DB_PASS"); // Mysql password 
		$db_name = constant("DB_NAME"); // Database name 	*/

		/*$dbhost = getenv("MYSQL_SERVICE_HOST");
		$dbuser = getenv("MYSQL_USER");
		$dbpwd = 
		$dbname = 

		$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);*/
		/*$sql =" CREATE TABLE `doctor` (`d_id` varchar(10) NOT NULL,`name` varchar(50) NOT NULL,`dept` varchar(50) NOT NULL,`cabin` varchar(10) NOT NULL,`contact`varchar(20) NOT NULL,PRIMARY KEY (`d_id`))";
		if($conn->query($sql) === TRUE)
		{
			 echo "table created";
			// header("Location: /app/adminDashboard.html");

		}
		$sql2 = "SELECT * FROM doctor";
		$result = $conn->query($sql2);
		//echo "Data from signup page : ".$name." ".$sex." ".$age." ".$contact." ".$email." ".$department." ".$description."<br>" ;
		if ($result->num_rows > 0) {
		    // output data of each row
		    ?>
		<center><table style="border: 3px solid #f1f1f1;">
			<tr><th>ID</th><th>Name</th><th>Departmnet</th><th>Cabin</th><th>Contact</th></th>
	<?php		    
		while($row = $result->fetch_assoc()) {

	?>
			<tr><td><?php echo $row["d_id"]."" ?></td><td><?php echo $row["name"]."" ?></td><td><?php echo $row["dept"]."" ?></td>
			<td><?php echo $row["cabin"]."" ?></td><td><?php echo $row["contact"]."" ?></td></tr>
	<?php		        
		}
	?>
		</table></center>    
	<?php
		} else {
		    echo "0 results";
		}
		//echo $drname."<br>";*/
		//$conn->close();
		//echo $drname."<br>";
	?> 
</body>
</html>