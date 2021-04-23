<?php
require 'template/body/function/function.php';
$berita = query("SELECT * FROM berita WHERE id %2 = 0");
$berita2 = query("SELECT * FROM berita where id %2 <> 0");

?>

<!DOCTYPE html>
<html>
<?php include 'template/head.php'; ?>

<?php include 'template/body/body.php'; ?>

	
</html>