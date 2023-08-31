<?php
	session_start();
	session_unset('student_id');
	if(!ISSET($_SESSION['student_id'])){
		echo'
			<div class = "alert alert-info">Student Login</div>
			<form>	
				<div class = "form-group">
					<label>Student ID</label>
					<input type = "number" min = "0" max = "99999999" id = "student_id" class = "form-control"/>
				</div>
				<br />
				<div class = "form-group">
					<button type = "button" class = "btn btn-primary form-control" id = "student_login">Login</button>
				</div>
			</form>	
		';
	}
?>