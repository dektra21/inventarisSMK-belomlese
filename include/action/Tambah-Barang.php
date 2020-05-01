<?php 

	require '../Connection.php';
	require '../class/BarangClass.php';

	$classBarang = new BarangClass($pdo);

	$nama = $_POST['nama'];
    $jenis = $_POST['jenis'];
    $foto = $_FILES['cover'];

	$tambahBarang = $classBarang->tambahBarang($nama,$jenis,$foto);
	if ($tambahBarang == 'berhasil'){
		header("Location: ../../admin/index.php?page=dashboard");
	}
	else{
		echo "Maaf ada Error";
	}

 ?>