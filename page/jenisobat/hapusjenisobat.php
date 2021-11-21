<?php
 
 $id = $_GET['id'];
 $sql = $koneksi->query("delete from jenis_obat where id = '$id'");

 if ($sql) {
 
 ?>
 
 
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?page=jenisobat";
	</script>
	
 <?php
 
 }
 
 ?>