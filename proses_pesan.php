<?php
include 'config/conn.php';

$nama=$_POST['nama']; 
		$email=$_POST['email']; 
		$no_handphone=$_POST['no_handphone']; 
		$pesan=$_POST['pesan']; 
        $status = 'menunggu';
		
  $query = "INSERT INTO `mesage` (`id`,`nama`,`email`,`no_handphone`,`pesan`,`status`)
VALUES (NULL,'$nama','$email','$no_handphone','$pesan','$status')";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    echo '
    <script>
   alert("Telah Berhasil Mengirim")
    </script>'; 
    echo '
    <script>
    window.location = "index.php"
    </script>'; 
  }
  else{
 
  }
?>