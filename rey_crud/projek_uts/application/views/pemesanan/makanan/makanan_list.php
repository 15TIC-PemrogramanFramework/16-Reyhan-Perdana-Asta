<?php $this->load->view('templates/header'); ?>
<?//php print_r($data_mahasiswa); ?>

<div class="row">
	<div class="col-md-12 text-right">	
			<div style="margin-top:20px;margin-bottom:10px;">
					<?php echo anchor(site_url('makanan/tambah'),
						'<i class = "fa fa-plus-circle" aria-hidden="true">
						</i> Tambah Data','class="btn btn-primary"');?>	
			</div>

	</div>
	<h1>Daftar Makanan</h1>
			<hr>
</div>

<div class="row">
<table id="example" class="table tavle-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama Makanan</th>
			<th>Harga </th>
			<th>Action</th>

		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_mahasiswa as $key => $row) { ?>
		<tr>
			
		<td><?php echo $row->id_mkn; ?> </td>
		<td><?php echo $row->nama_mkn; ?> </td>
		<td><?php echo $row->harga; ?> </td>
		
			
			<td> 
			<?php echo anchor(site_url('makanan/edit/' .$row->id_mkn),
			'<i class = "fa fa-pencil"></i>',
			'class="btn btn-warning"'); ?>	
		
			<?php echo anchor(site_url('makanan/delete/' .$row->id_mkn),
			'<i class = "fa fa-trash"></i>',
			'class="btn btn-danger"'); ?>
			
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
</div>

<?php $this->load->view('templates/footer'); ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
