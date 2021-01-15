<?php $conn=mysqli_connect('localhost','root','mysql','sprint2DB');

$getEmployeeData="SELECT 
projects.pid, 
projects.pname, 
group_concat(employees.ename ORDER BY employees.ename ASC SEPARATOR ', ') as employee
FROM employees
RIGHT JOIN projects
ON employees.pid = projects.pid
GROUP BY projects.pid;";
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
   
    <h2>Project</h2>
    <div id="top_btns">
		<a href="employees.php"><button id="top">Employees</button></a>
		<a href="projects.php"><button id="top">Project</button></a>
		<a href="index.php"><button id="top">Back</button></a>
    </div>
    <table id="tableid">
			<thead>
				<th>Id</th>
                <th>Project</th>	
                <th>Employees</th>
                <th>Action</th>		
			</thead>
			<tbody>

				<?php while($row=mysqli_fetch_assoc($result)) { ?>

				<tr>
					<td><?php echo $row['pid']?></td>
                    <td><?php echo $row['pname']?></td>
                    <td><?php echo $row['employee']?></td>
		    <td><button id="delete">Delete</button></a> <button id="edit">Edit</button></td>
				</tr>

				<?php } ?>

			</tbody>
		</table>
</body>
</html>