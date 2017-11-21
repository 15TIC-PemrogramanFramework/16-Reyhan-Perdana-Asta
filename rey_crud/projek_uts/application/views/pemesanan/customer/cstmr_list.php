<?php $this->load->view('templates/header'); ?>
<br>
<div class="row">
	<div class="col-md-12 text-right">	
			<div>	
					<?php echo anchor(site_url('customer/tambah'),
						'<i class = "fa fa-plus-circle" aria-hidden="true">
						</i> Tambah Data','class="btn btn-primary"');?>	
		
			</div>
	</div>
		<h1>Daftar Pesanan Customer</h1>
			<hr>
</div>
<br>
<div class="row">
<table id="example" class="table tavle-striped table-bordered">
	<thead>
		<tr>
			<th>ID Customer</th>
			<th>Nama Pemesan</th>
			<th>ID Makanan</th>
			<th>Nama Makanan</th>
			<th>Jumlah</th>
			<th>ID Minuman</th>
			<th>Nama Minuman</th>
			<th>Jumlah</th>
			<th>Alamat </th>
		
			
			<th>Action</th>

		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_mahasiswa as $key => $row) { ?>
		<tr>
			
		<td><?php echo $row->id_cstmr; ?> </td>
		<td><?php echo $row->nama_cstmr; ?> </td>
		<td><?php echo $row->id_mkn; ?> </td>
		<td><?php echo $row->nama_mkn; ?> </td>
		<td><?php echo $row->jml_mkn; ?> </td>
		<td><?php echo $row->id_mnm; ?> </td>
		<td><?php echo $row->nama_mnm; ?> </td>
		<td><?php echo $row->jml_mnm; ?> </td>
		<td><?php echo $row->alamat; ?> </td>

		
			
			<td> 
			<?php echo anchor(site_url('customer/edit/' .$row->id_cstmr),
			'<i class = "fa fa-pencil"></i>',
			'class="btn btn-warning"'); ?>	
		
			<?php echo anchor(site_url('customer/delete/' .$row->id_cstmr),
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
