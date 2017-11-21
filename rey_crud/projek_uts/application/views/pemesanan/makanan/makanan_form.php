<?php 	$this->load->view ('templates/header'); ?>
<form action="<?php echo $action; ?>" method="post" >	

	<div class="form-group">
		<label>	NAMA MAKANAN</label>
		<input type="text" class="form-control" name="nama_mkn"  required placeholder="Masukan Nama Makanan"  value="<?php echo $nama_mkn; ?>" >	
	</div>
	<div class="form-group">
		<label>  HARGA	</label>
		<input type="text" class="form-control" name="harga" required placeholder="Masukan Harga"  value="<?php echo $harga; ?>">	
	</div>

	

			<input type="hidden" name="id_mkn" value="<?php echo $id_mkn; ?>"/>
			<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
			<a href="<?php 	echo site_url('makanan'); ?>" class="btn btn-default"> Cancel </a>

		</form>
		<?php 	$this->load->view ('templates/footer'); ?>