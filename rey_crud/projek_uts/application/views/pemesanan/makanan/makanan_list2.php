<?php $this->load->view('templates/header2'); ?>
<?//php print_r($data_mahasiswa); ?>
<hr>


<table id="example" class="table tavle-striped table-bordered">
<thead>

		<br>
		<tr>
			<th>ID</th>
			<th>Nama Makanan</th>
			<th>Harga </th>
			

		</tr>
		
	<tbody>
	<?php foreach ($data_mahasiswa as $key => $row) { ?>
		<tr>
			
		<td><?php echo $row->id_mkn; ?> </td>
		<td><?php echo $row->nama_mkn; ?> </td>
		<td><?php echo $row->harga; ?> </td>
		
			
			
		</tr>
	<?php } ?>
	</tbody>
</thead>
</table>
</div>

<?php $this->load->view('templates/footer'); ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
