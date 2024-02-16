<?php


function GetAll(){
  $query = "SELECT * FROM slideshow";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'],
		'foto' => $data['foto'],
		
    );
  }
  return $datas;
}

function GetOne($id){
  $query = "SELECT * FROM  `slideshow` WHERE  `id` =  '$id'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'], 
		'foto' => $data['foto'], 
		
    );
  }
return $datas;
}

function Insert(){
  $foto=$_POST['foto']; 
		
  $query = "INSERT INTO `slideshow` (`id`,`foto`)
VALUES (NULL,'$foto')";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah disimpan ";
    $_SESSION['mType'] = "success ";
    echo '
    <script>
    window.location = "?r=slideshow/index"
    </script>'; 
  }
  else{
    $_SESSION['message'] = " Data Gagal disimpan ";
    $_SESSION['mType'] = "danger ";
    echo '
    <script>
    window.location = "?r=slideshow/index"
    </script>'; 
  }
}
function Update($id){
  $komoditas=$_POST['foto']; 
	
		
  $query = "UPDATE `slideshow` SET `foto` = '$foto' WHERE  `id` =  '$id'";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah diubah ";
    $_SESSION['mType'] = "success ";
    echo '
    <script>
    window.location = "?r=slideshow/index"
    </script>'; 
  }
  else{
    $_SESSION['message'] = " Data Gagal diubah ";
    $_SESSION['mType'] = "danger ";
    echo '
    <script>
    window.location = "?r=slideshow/index"
    </script>'; 
  }
}
function Delete($id){
  $query = "DELETE FROM `slideshow` WHERE `id` = '$id'";
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
