 <?php
@session_start();
if(@$_SESSION['status']==15000){
	header('Location: dashboard_index.php');
}
?> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<form action="login.php" method="post">
	<table class="table table-bordered" >
		<tr>
			<th>Name</th>
			<td><input type="text" name="name" class="form-control"></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input type="password" name="password" class="form-control"></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<input type="submit" value="Login" class="btn btn-sm btn-primary">
			</td>
		</tr>
	</table>
</form>