 <?php
 
 $kode_obat = $_GET['kode_obat'];
 $sql = $koneksi->query("delete from gudang where kode_obat = '$kode_obat'");

 if ($sql) {
 
 ?>
 
 
	<script type="text/javascript">
	alert("Data Berhasil Dihapus");
	window.location.href="?page=gudang";
	</script>
	
 <?php
 
 }
 
 ?>