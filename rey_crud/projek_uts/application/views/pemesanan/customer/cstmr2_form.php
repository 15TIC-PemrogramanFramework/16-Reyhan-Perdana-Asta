<?php 	$this->load->view ('templates/header2'); ?>

<hr>
<form action="<?php echo $action; ?>" method="post" >	

	<div class='container'>

		<div class='row'>

			<div class='col-md-5'>

<br>
				<h3>Masukan Pesanan Anda</h3>
				<hr>


				<div class="form-group">
					<label>	ID ANDA </label>
					<input type="text" class="form-control" name="id_cstmr"  required placeholder="Masukan ID anda"  value="<?php echo $nama_cstmr; ?>" >	
				</div>

				<div class="form-group">
					<label>	NAMA CUSTOMER </label>
					<input type="text" class="form-control" name="nama_cstmr"  required placeholder="Masukan Nama Anda"  value="<?php echo $nama_cstmr; ?>" >	
				</div>

				<label>MENU MAKANAN </label>

				<div class='form-group'>
					<select name="nama_mkn">

						<?php
						$this->db->select('nama_mkn');
						$nama_mkn = $this->db->get('makanan');
					foreach ($nama_mkn->result() as $row) {
					
						
							echo "<option value='".$row->nama_mkn."'>".$row->nama_mkn."</option>";
						
				

					}	
						
						


					 ?>
					 <?php 
					$this->db->select('id_mkn');
						$nama_mkn = $this->db->get('makanan');

						foreach($nama_mkn->result() as $row){
							
						
						


					 ?>
	<input type="hidden" name="id_mkn" value="<?php echo $row->id_mkn ?>"/> <?php } ?>

					</select>
				</div>

				<div class="form-group">
					<label>	JUMLAH PESANAN </label>
					<input type="text" class="form-control" name="jml_mkn"  required placeholder="Masukan Jumlah Makanan Yang anda pesan"  value="" >	
				</div>	

				<label> MENU MINUMAN </label>
				<div class='form-group'>
					<select name="nama_mnm">
						<?php
						$this->db->select('nama_mnm');
						$nama_mnm = $this->db->get('minuman');

						foreach($nama_mnm->result() as $row){
							echo "<option value='".$row->nama_mnm."'>".$row->nama_mnm."</option>";
						
						}

						?>
					<?php 
					$this->db->select('id_mnm');
						$nama_mnm = $this->db->get('minuman');

						foreach($nama_mnm->result() as $row){
							
						
						


					 ?>
	<input type="hidden" name="id_mnm" value="<?php echo $row->id_mnm ?>"/> <?php } ?>
					</select>

				</div>

 	
  				<div class="form-group">
					<label>	JUMLAH PESANAN </label>
					<input type="text" class="form-control" name="jml_mnm"  required placeholder="Masukan Jumlah Minuman yang anda pesan"  value="" >	
				</div>

					<div class="form-group">
					<label>	ALAMAT </label>
					<input type="text" class="form-control" name="alamat"  required placeholder="Masukan Jumlah Minuman yang anda pesan"  value="" >	
				</div>

			</div>

		</div>

	</div>






<button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
<a href="<?php 	echo site_url('customer'); ?>" class="btn btn-default"> Cancel </a>

</form>

<?php 	$this->load->view ('templates/footer'); ?>