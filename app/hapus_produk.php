<?php
include "koneksi.php";
$id = $_GET['id'];
$hapus = $konek->query("delete from menu where id ='$id'");
?>
<script>
 document.location.href = 'tools.php';
</script>