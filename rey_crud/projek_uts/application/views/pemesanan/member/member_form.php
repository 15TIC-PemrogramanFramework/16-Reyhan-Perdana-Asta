<?php 	$this->load->view ('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post" >	

	<div class="form-group">
		<label>	USERNAME</label>
		<input type="text" class="form-control" name="user"  required   placeholder="Masukan Username Baru"  value="<?php 	echo $user; ?>" >	
	</div>
	<div class="form-group">
		<label> PASSWORD	</label>
		<input type="text" class="form-control" name="pass" required placeholder="Masukan Passowrd Baru"  value="<?php 	echo $pass; ?>">	
	</div>
	

	
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php 	echo site_url('member'); ?>" class="btn btn-default"> Cancel </a>
	
</form>
<?php 	$this->load->view ('templates/footer'); ?>