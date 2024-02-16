<?php
include 'config/conn.php';

$nama=$_POST['nama']; 
$email=$_POST['email']; 
$no_handphone=$_POST['no_handphone'];  
$jabatan=$_POST['jabatan'];
$query = "UPDATE `team` SET `nama` = '$nama',`email` = '$email',`no_handphone` = '$no_handphone',`jabatan`  = '$jabatan'WHERE  `id` =  '$id'";
$exe = mysqli_query(Connect(),$query);
if($exe){
// kalau berhasil
$_SESSION['message'] = " Data Sudah diubah ";
$_SESSION['mType'] = "success ";
echo '
<script>
window.location = "index.php"
</script>'; 
}
else{
$_SESSION['message'] = " Data Gagal diubah ";
$_SESSION['mType'] = "danger ";
echo '
<script>
window.location = "index.php"
</script>'; 
}
?>