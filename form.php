<!DOCTYPE>
<?php 

include("includes/db.php");

?>
<html>
	<head>
		<title>Employee</title>
		
		
	<link rel="stylesheet" href="styles/form.css" media="all" /> 
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

	</head>
	
<body>
<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Employee Skills <small>Entry</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" action="form.php" method ="post" enctype="multipart/form-data">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="emp_id" id="emp_id" class="form-control input-sm" placeholder="Employee Id">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="emp_name" id="emp_name" class="form-control input-sm" placeholder="Employee Name">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    		<h4 for="sel1">Select Skills Rating(out of 10) </h4>
						<label>communication skill</label><br>
                      <input type="int" name="comm_skill" id="comm_skill" class=" input-sm-2" ><br>
								  <label>Teamwork</label><br>
                        <input type="int" name="team_skill" id="team_skill" class=" input-sm-2" ><br>
						  <label>analytical skill</label><br>
                          <input type="int" name="analy_skill" id="analy_skill" class=" input-sm-2" ><br>
							   <label>learning skill</label><br>
                       <input type="int" name="learn_skill" id="learn_skill" class=" input-sm-2" ><br>
							   <label>leadership skill</label><br>
                       <input type="int" name="leader_skill" id="leader_skill" class=" input-sm-2" ><br>
			    			</div>
			    			<input type="submit" value="Submit" name="insert_post"class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
<!--Main Container ends here-->
<button>
<a href="employee.php"><b>SHOW TABLE</b></a>
</button>
</body>
</html>

<?php 

	if(isset($_POST['insert_post'])){
	
		//getting the text data from the fields
		$Emp_id = $_POST['emp_id'];
		$Emp_name= $_POST['emp_name'];
		$comm_skill = $_POST['comm_skill'];
		$team_skill = $_POST['team_skill'];
		$analy_skill = $_POST['analy_skill'];
		$learn_skill = $_POST['learn_skill'];
		$leader_skill = $_POST['leader_skill'];
	
		//getting the image from the field

	
		 $insert_employee ="insert into employee(emp_id,emp_name,comm_skill,team_skill,analy_skill,learn_skill,leader_skill) values ('$Emp_id','$Emp_name','$comm_skill','$team_skill','$analy_skill','$learn_skill','$leader_skill')";
		 
		 $insert_emp = mysqli_query($con, $insert_employee);
		 
		 if($insert_emp){
		 
		 echo "<script>alert('Employee details has been inserted!')</script>";

		 
		 }
	}
?>