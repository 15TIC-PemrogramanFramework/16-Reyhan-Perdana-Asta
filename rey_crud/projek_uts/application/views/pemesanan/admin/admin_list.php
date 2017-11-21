<?php $this->load->view('templates/header'); ?>
<?//php print_r($data_mahasiswa); ?>
<div class="row">
	<div class="col-md-12 text-right">	
			<div style="margin-top:20px;margin-bottom:10px;">
					<?php echo anchor(site_url('admin/tambah'),
						'<i class = "fa fa-plus-circle" aria-hidden="true">
						</i> Tambah Data','class="btn btn-primary"');?>	
			</div>
	</div>
		<h1>Daftar Admin</h1>
			<hr>
</div>

<div class="row">
<table id="example" class="table tavle-striped table-bordered">
	<thead>
		<tr>
			<th>Username</th>
			<th>Password</th>
			<th>Action </th>
		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_mahasiswa as $key => $row) { ?>
		<tr>
			
		<td><?php echo $row->username	; ?> </td>
		<td><?php echo $row->password; ?> </td>
			
			<td> 
			<?php echo anchor(site_url('admin/edit/' .$row->username),
			'<i class = "fa fa-pencil"></i>',
			'class="btn btn-warning"'); ?>	
		
			<?php echo anchor(site_url('adimn/delete/' .$row->username),
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
