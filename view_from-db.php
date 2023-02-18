<?php
require_once("include/DB.php");

?>
<!DOCTYPE>
<html>
	<head>
		<title>View Data From Database</title>
		<link rel="stylesheet" href="Include/style.css">
	</head>
	<style media="screen">
	table, th, td {
		  border: 1px solid;
		}
	</style>
	<body>
	<table width="1000" border="5" align="center">
		<caption>View From Database</caption>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>SSN</th>
			<th>Department</th>
			<th>Salary</th>
			<th>Home Address</th>
			<th>Update</th>
			<th>Delete</th>
		</tr>
		
		<?php 
			global $ConnectingDB;
			$sql = "SELECT * from emp_record";
			$stmt = $ConnectingDB->query($sql);
			while ($DataRows=$stmt->fetch()){
				$Id 		= $DataRows['id'];
				$Ename 		= $DataRows['ename'];
				$ssn 		= $DataRows['ssn'];
				$dept 		= $DataRows['dept'];
				$salary 	= $DataRows['salary'];
				$homeaddress = $DataRows['homeaddress']; ?>
				<tr>
					<th><?php echo $Id;?></th>
					<th><?php echo $Ename;?></th>
					<th><?php echo $ssn;?></th>
					<th><?php echo $dept;?></th>
					<th><?php echo $salary;?></th>
					<th><?php echo $homeaddress;?></th>
					<th><a href="update.php?id=<?php echo $Id; ?>">Update</a></th>
					<th><a href="delete.php?id=<?php echo $Id;?>">Delete</a></th>
				</tr>
			<?php } // while ends?>
	</table>

	</body>
</html>
