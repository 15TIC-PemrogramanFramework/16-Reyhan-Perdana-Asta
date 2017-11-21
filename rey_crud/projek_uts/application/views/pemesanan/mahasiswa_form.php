<?php 	$this->load->view ('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post" >	

	<div class="form-group">
		<label>	USERNAME</label>
		<input type="text" class="form-control" name="username"  required   placeholder="Masukan Username Baru"  value="<?php 	echo $username; ?>" >	
	</div>
	<div class="form-group">
		<label> PASSWORD	</label>
		<input type="text" class="form-control" name="password" required placeholder="Masukan Passowrd Baru"  value="<?php 	echo $password; ?>">	
	</div>
	

	
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php 	echo site_url('admin'); ?>" class="btn btn-default"> Cancel </a>
	
</form>
<?php 	$this->load->view ('templates/footer'); ?>