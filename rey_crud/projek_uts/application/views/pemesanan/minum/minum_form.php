<?php 	$this->load->view ('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post" >	

	<div class="form-group">
		<label>	NAMA MINUMAN</label>
		<input type="text" class="form-control" name="nama_mnm"  required placeholder="Masukan Nama Minuman"  value="<?php echo $nama_mnm; ?>" >	
	</div>
	<div class="form-group">
		<label>  HARGA	</label>
		<input type="text" class="form-control" name="harga" required placeholder="Masukan Harga"  value="<?php echo $harga; ?>">	
	</div>
	
	<input type="hidden" name="id_mnm" value="<?php echo $id_mnm; ?>"/>
	<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
	<a href="<?php 	echo site_url('minuman'); ?>" class="btn btn-default"> Cancel </a>
	
</form>
<?php 	$this->load->view ('templates/footer'); ?>