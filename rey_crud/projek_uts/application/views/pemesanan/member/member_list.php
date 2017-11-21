<?php $this->load->view('templates/header'); ?>
<br>
<div class="row">
	<div class="col-md-12 text-right">	
			<div>	
					<?php echo anchor(site_url('member/tambah'),
						'<i class = "fa fa-plus-circle" aria-hidden="true">
						</i> Tambah Data','class="btn btn-primary"');?>	
		
			</div>
	</div>
		<h1>Daftar Member</h1>
			<hr>
</div>
<br>
<div class="row">
<table id="example" class="table tavle-striped table-bordered">
	<thead>
		<tr>
			<th>Username</th>
			
			<th>Password</th>

			<th>Action<th>

		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_mahasiswa as $key => $row) { ?>
		<tr>
			
		<td><?php echo $row->user; ?> </td>
		<td><?php echo $row->pass; ?> </td>
	
		
		
			
			<td> 
			<?php echo anchor(site_url('customer/edit/' .$row->user),
			'<i class = "fa fa-pencil"></i>',
			'class="btn btn-warning"'); ?>	
		
			<?php echo anchor(site_url('customer/delete/' .$row->user),
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
