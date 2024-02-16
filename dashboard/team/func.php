<?php


function GetAll(){
  $query = "SELECT * FROM team";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'],
		'nama' => $data['nama'],
		'email' => $data['email'],
		'no_handphone' => $data['no_handphone'],
    'jabatan' => $data['jabatan'],
		
		
    );
  }
  return $datas;
}

function GetOne($id){
  $query = "SELECT * FROM  `team` WHERE  `id` =  '$id'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'], 
		'nama' => $data['nama'], 
		'email' => $data['email'], 
		'no_handphone' => $data['no_handphone'], 
    'jabatan' => $data['jabatan'],
		
    );
  }
return $datas;
}

function Insert(){
  $nama=$_POST['nama']; 
		$email=$_POST['email']; 
		$no_handphone=$_POST['no_handphone']; 
    $jabatan=$_POST['jabatan'];
		
  $query = "INSERT INTO `team` (`id`,`nama`,`email`,`no_handphone`,`jabatan`)
VALUES (NULL,'$nama','$email','$no_handphone', '$jabatan')";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah disimpan ";
    $_SESSION['mType'] = "success ";
    echo '
    <script>
    window.location = "?r=team/index"
    </script>'; 
  }
  else{
    $_SESSION['message'] = " Data Gagal disimpan ";
    $_SESSION['mType'] = "danger ";
    echo '
    <script>
    window.location = "?r=team/index"
    </script>'; 
  }
}
function Update($id){
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
    window.location = "?r=team/index"
    </script>'; 
  }
  else{
    $_SESSION['message'] = " Data Gagal diubah ";
    $_SESSION['mType'] = "danger ";
    echo '
    <script>
    window.location = "?r=team/index"
    </script>'; 
  }
}
function Delete($id){
  $query = "DELETE FROM `team` WHERE `id` = '$id'";
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


if(isset($_POST['insert'])){
  Insert();
}
else if(isset($_POST['update'])){
  Update($_POST['id']);
}
else if(isset($_POST['delete'])){
  Delete($_POST['id']);
}
?>
