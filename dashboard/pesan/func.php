<?php


function GetAll(){
  $query = "SELECT * FROM mesage  ";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'],
		'nama' => $data['nama'],
		'email' => $data['email'],
		'no_handphone' => $data['no_handphone'],
		'pesan' => $data['pesan'],

    'status' => $data['status'],
		
    );
  }
  return $datas;
}

function GetByStatus(){
  $status = "Menunggu";
  $query = "SELECT * FROM mesage WHERE status='$status'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'],
		'nama' => $data['nama'],
		'email' => $data['email'],
		'no_handphone' => $data['no_handphone'],
		'pesan' => $data['pesan'],
    'status' => $data['status'],
		
    );
  }
  return $datas;
}

function GetOne($id){
  $query = "SELECT * FROM  `mesage` WHERE  `id` =  '$id'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'], 
		'nama' => $data['nama'], 
		'email' => $data['email'], 
		'no_handphone' => $data['no_handphone'], 
		'pesan' => $data['pesan'], 
    'status' => $data['status'],
		
    );
  }
return $datas;
}

function Insert($id){
  $nama=$_POST['nama']; 
		$email=$_POST['email']; 
		$no_handphone=$_POST['no_handphone']; 
		$pesan=$_POST['pesan']; 
    $status= "Menunggu"; 
    
		
  $query = "INSERT INTO `mesage` (`nama`,`email`,`no_handphone`,`pesan`,`status`)
VALUES ('$nama','$email','$no_handphone','$pesan','$status')";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah disimpan ";
    $_SESSION['mType'] = "success ";
  echo '<script>window.location = "?r=pesan/index"</script>';
  }
  else{
    
   
  }
}
function Update($id){
  $nama=$_POST['nama']; 
		$email=$_POST['email']; 
		$no_handphone=$_POST['no_handphone']; 
		$pesan=$_POST['pesan']; 
		
  $query = "UPDATE `mesage` SET `nama` = '$nama',`email` = '$email',`no_handphone` = '$no_handphone',`pesan` = '$pesan' WHERE  `id` =  '$id'";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah diubah ";
    $_SESSION['mType'] = "success ";
    echo '
    <script>
    window.location = "?r=pesan/index"
    </script>'; 
  }
  else{
    $_SESSION['message'] = " Data Gagal diubah ";
    $_SESSION['mType'] = "danger ";
    echo '
    <script>
    window.location = "?r=pesan/index"
    </script>'; 
 
  }
}
function Delete($id){
  $query = "DELETE FROM `mesage` WHERE `id` = '$id'";
  $exe = mysqli_query(Connect(),$query);
    if($exe){
      // kalau berhasil
      $_SESSION['message'] = " Data Sudah dihapus ";
      $_SESSION['mType'] = "success ";
      
    }
    else{
      $_SESSION['message'] = " Data Gagal dihapus ";
      $_SESSION['mType'] = "danger ";
  
    }
}
function Verifikasi($id){
  $status= "Telah dibalas"; 
	
		
  $query = "UPDATE `mesage` SET `status` = '$status'  WHERE  `id` =  '$id'";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah diubah ";
    $_SESSION['mType'] = "success ";
    echo '
    <script>
     alert("Berhasil telah diverifikasi")
    </script>'; 
    echo '
    <script>
    window.location = "?r=pesan/index"
    </script>'; 
  }
  else{
    $_SESSION['message'] = " Data Gagal diubah ";
    $_SESSION['mType'] = "danger ";
    echo '
    <script>
    window.location = "?r=pesan/index"
    </script>'; 
 
  }
}

if(isset($_POST['insert'])){
  Insert($_POST);
}
else if(isset($_POST['update'])){
  Update($_POST['id']);
}
else if(isset($_POST['delete'])){
  Delete($_POST['id']);
}
else if(isset($_POST['verifikasi'])){
  Verifikasi($_POST['id']);
}
?>
