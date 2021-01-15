<?php $conn=mysqli_connect('localhost','root','mysql','sprint2DB');

$getEmployeeData="SELECT employees.eid, employees.ename, projects.pid as project_id, projects.pname FROM employees
LEFT JOIN projects
ON employees.pid = projects.pid";
$result=mysqli_query($conn,$getEmployeeData);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sprint</title>
	<link rel="stylesheet" href="style.css">	
</head>
<body>
   

	<h2>Employee management system</h2>
	<div id="top_btns">
		<a href="employees.php"><button id="top">Employees</button></a>
		<a href="projects.php"><button id="top">Project</button></a>
		<a href="index.php"><button id="top">Back</button></a>
	</div>
	<table id="tableid";>
			<thead>
				<th>Id</th>
				<th>Name</th>
				<th>Project</th>	
				<th>Action</th>			
			</thead>

			<tbody>

				<?php while($row=mysqli_fetch_assoc($result)) { ?>

				<tr>
					<td><?php echo $row['eid']?></td>
					<td><?php echo $row['ename']?></td>
					<td><?php echo $row['pname']?></td>
					<td><button id="delete">Delete</button></a> <button id="edit">Edit</button></td>
				</tr>

				<?php } ?>

			</tbody>
		</table>
</body>
</html>