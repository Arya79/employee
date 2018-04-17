<!DOCTYPE>

<html>

<body>
<table width="795" align="center" bgcolor="pink"> 

	
	<tr align="center">
		<td colspan="6" ><h2>View All Customers Here</h2></td>
	</tr>
	
	<tr align="center" bgcolor="skyblue">
		<th>Employee id</th>
		<th>Employee Name</th>
		<th>communication skill</th>
		<th>Teamwork</th>
		<th>analytical skill</th>
		<th>learning skill</th>
		<th>leadership skill</th>
	</tr>
	<?php 
	include("includes/db.php");
	$get_c = "select * from employee";
	
	$run_c = mysqli_query($con, $get_c);

	
	$i = 0;
	
	while ($row_c=mysqli_fetch_array($run_c)){
		
		$emp_id = $row_c['emp_id'];
		$emp_name = $row_c['emp_name'];
		$comm_skill = $row_c['comm_skill'];
		$team_skill = $row_c['team_skill'];
		$analy_skill = $row_c['analy_skill'];
		$learn_skill = $row_c['learn_skill'];
		$leader_skill = $row_c['leader_skill'];
		
		$i++;
	
	?>
	<tr align="center">
		<td><?php echo $emp_id;?></td>
		<td><?php echo $emp_name;?></td>
		<td><?php echo $comm_skill;?></td>
		<td><?php echo $team_skill ;?></td>
		<td><?php echo $analy_skill ;?></td>
		<td><?php echo $learn_skill ;?></td>
		<td><?php echo $leader_skill ;?></td>
</tr>
	
<?php } ?>

</table>
</body>
</html>