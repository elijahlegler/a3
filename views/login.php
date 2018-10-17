<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1> the Login View </h1>
  </div>
	<form action = '<?php echo BASE_URL?>do_login/<?php echo $task?>' method = 'post'>
	<label>Username</label>
	<input type = 'text'>
	<br>
	<label>Password</label>
	<input type = 'password'>
	<br>
	<button id="submit" type="submit" class="btn btn-primary" >Submit</button>

<?php include('elements/footer.php');?>
