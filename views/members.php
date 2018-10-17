
<?php include('elements/header.php');?>

<?php if( is_array($users) ) {?>

<div class="container">
<div class="page-header">

<h1> the Members View</h1>
  </div>

	<?php foreach($users as $u){?>
    <h3><a href="<?php echo BASE_URL?>members/view/<?php echo $u['uID'];?>" title="<?php echo $u['first_name'];?>"><?php echo $u['last_name'];?></a></h3>
	<br>
<?php }?>
</div>

<?php }?>


<?php include('elements/footer.php');?>
