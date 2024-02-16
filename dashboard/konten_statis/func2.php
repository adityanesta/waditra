<?php


function GetAll(){
  $query = "SELECT * FROM konten_statis";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'],
	
    'lainnya' => $data['lainnya'],
    );
  }
  return $datas;
}

function GetOne($id){
  $query = "SELECT * FROM  `konten_statis` WHERE  `id` =  '$id'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'], 

    'lainnya' => $data['lainnya'],
    );
  }
return $datas;
}

function Insert($id){
		
    $lainnya=$_POST['lainnya']; 
  $query = "INSERT INTO `konten_statis` (`id`,`lainnya`)
VALUES (NULL,'$visi_dan_misi','$lainnya')";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah disimpan ";
    $_SESSION['mType'] = "success ";
    echo '
    <script>
    window.location = "?r=konten_statis/index"
    </script>'; 
  }
  else{
    $_SESSION['message'] = " Data Gagal disimpan ";
    $_SESSION['mType'] = "danger ";
    echo '
    <script>
    window.location = "?r=konten_statis/index"
    </script>'; 
  }
}
function Update($id){
  $konten_statis=$_POST['konten_statis']; 
		 
    $lainnya=$_POST['lainnya']; 
  $query = "UPDATE `konten_statis` SET `lainnya` = '$lainnya' WHERE  `id` =  '$id'";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah diubah ";
    $_SESSION['mType'] = "success ";
    echo '
    <script>
    window.location = "?r=konten_statis/index"
    </script>'; 
  }
  else{
    $_SESSION['message'] = " Data Gagal diubah ";
    $_SESSION['mType'] = "danger ";
    echo '
    <script>
    window.location = "?r=konten_statis/index"
    </script>'; 
  }
}
function Delete($id){
  $query = "DELETE FROM `konten_statis` WHERE `id` = '$id'";
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
  Insert($_POST);
}
else if(isset($_POST['update'])){
  Update($_POST['id']);
}
else if(isset($_POST['delete'])){
  Delete($_POST['id']);
}
?>
