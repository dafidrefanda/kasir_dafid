<?php
	$host 	= 'localhost'; // host server
	$user 	= 'root';  // username server
	$pass 	= ''; // password server, kalau pakai xampp kosongin saja
	$dbname = 'kasirukk'; // nama database anda
	$koneksi=mysqli_connect("$host","$user","$pass","$dbname");
	if (mysqli_connect_errno()) {
        echo "koneksi database gagal : ".
        mysqli_connect_error();
    }
?>
