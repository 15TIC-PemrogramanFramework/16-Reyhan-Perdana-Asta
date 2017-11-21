<?php $this->load->view('templates/header2'); ?>
<?//php print_r($data_mahasiswa); ?>
<br>
<hr>
<div align="center">	
			<?php echo anchor(site_url('customer2/tambah'),
				'<i class = "fa fa-plus-circle" abs(number)ria-hidden="true">
			</i> Pesan  ','class="btn btn-primary"');?>	

		</div> 
<hr>
<div class="row">
	<div class="col-md-20 text-center">	
		    </div> </div> </br> <div class="row"> 
		</div>

<table id="example" class="table tavle-striped table-bordered">
	<thead>
		<tr>
			
			<th>Nama Pemesan</th>
			<th>ID Makanan</th>
			<th>Nama Makanan</th>
			<th>Jumlah</th>
			<th>ID Minuman</th>
			<th>Nama Minuman</th>
			<th>Jumlah</th>
			<th>Alamat </th>
			
		

		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_mahasiswa as $key => $row) { ?>
		<tr>
			
	
		<td><?php echo $row->nama_cstmr; ?> </td>
		<td><?php echo $row->id_mkn; ?> </td>
		<td><?php echo $row->nama_mkn; ?> </td>
		<td><?php echo $row->jml_mkn; ?> </td>
		<td><?php echo $row->id_mnm; ?> </td>
		<td><?php echo $row->nama_mnm; ?> </td>
		<td><?php echo $row->jml_mnm; ?> </td>
		<td><?php echo $row->alamat; ?> </td>
		
		
		</tr>
	<?php } ?>
	</tbody>
</table>
		<?php $this->load->view('templates/footer2'); ?>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#example').DataTable();
			} );
		</script>
