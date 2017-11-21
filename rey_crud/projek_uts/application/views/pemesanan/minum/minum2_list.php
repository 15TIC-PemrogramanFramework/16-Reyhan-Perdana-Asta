<?php $this->load->view('templates/header2'); ?>
<?//php print_r($data_mahasiswa); ?>
<hr>
<br>
<div class="row">
<table id="example" class="table tavle-striped table-bordered">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nama Minuman</th>
			<th>Harga </th>
		

		</tr>
	</thead>
	<tbody>
	<?php foreach ($data_mahasiswa as $key => $row) { ?>
		<tr>
			
		<td><?php echo $row->id_mnm; ?> </td>
		<td><?php echo $row->nama_mnm; ?> </td>
		<td><?php echo $row->harga; ?> </td>
			
			
			
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
