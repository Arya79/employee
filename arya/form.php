<!DOCTYPE>
<?php 
session_start();
include("functions/functions.php");

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
			    		<form role="form">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" name="Emp_id" id="emp_id" class="form-control input-sm" placeholder="Employee Id">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="Emp_name" id="emp_name" class="form-control input-sm" placeholder="Employee Name">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    		<h4 for="sel1">Select Skils Rateing </h4>
						<label>communication skill</label>
                        <select class="form-control" id="skill">
                           <option>1</option>
                            <option>2</option>
							<option>3</option>
                            <option>4</option>
							<option>5</option>
                            <option>6</option>
							<option>7</option>
                            <option>8</option>
							<option>9</option>
                            <option>10</option>

                            
                                  </select>
								  <label>Teamwork</label>
                        <select class="form-control" id="skill">
                           <option>1</option>
                            <option>2</option>
							<option>3</option>
                            <option>4</option>
							<option>5</option>
                            <option>6</option>
							<option>7</option>
                            <option>8</option>
							<option>9</option>
                            <option>10</option>
                          </select>
						  <label>analytical skill</label>
                        <select class="form-control" id="skill">
                           <option>1</option>
                            <option>2</option>
							<option>3</option>
                            <option>4</option>
							<option>5</option>
                            <option>6</option>
							<option>7</option>
                            <option>8</option>
							<option>9</option>
                            <option>10</option>
							 </select>
							   <label>learning skill</label>
                        <select class="form-control" id="skill">
                           <option>1</option>
                            <option>2</option>
							<option>3</option>
                            <option>4</option>
							<option>5</option>
                            <option>6</option>
							<option>7</option>
                            <option>8</option>
							<option>9</option>
                            <option>10</option>
							 </select>
							   <label>leadership skill</label>
                        <select class="form-control" id="skill">
                           <option>1</option>
                            <option>2</option>
							<option>3</option>
                            <option>4</option>
							<option>5</option>
                            <option>6</option>
							<option>7</option>
                            <option>8</option>
							<option>9</option>
                            <option>10</option>
							 </select>
			    			</div>
			    			<input type="submit" value="Submit" class="btn btn-info btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
<!--Main Container ends here-->


</body>
</html>


