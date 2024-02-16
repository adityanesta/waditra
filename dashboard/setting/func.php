<?php


function GetAll(){
  $query = "SELECT * FROM setting";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'],
		'kategori' => $data['kategori'],
		'deskripsi' => $data['deskripsi'],
		
    );
  }
  return $datas;
}

function GetOne($id){
  $query = "SELECT * FROM  `setting` WHERE  `id` =  '$id'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'], 
		'kategori' => $data['kategori'], 
		'deskripsi' => $data['deskripsi'], 
		
    );
  }
return $datas;
}

function Insert($id){
  $kategori=$_POST['kategori']; 
		$deskripsi=$_POST['deskripsi']; 
		
  $query = "INSERT INTO `setting` (`id`,`kategori`,`deskripsi`)
VALUES (NULL,'$kategori','$deskripsi')";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah disimpan ";
    $_SESSION['mType'] = "success ";
    echo '
    <script>
    window.location = "?r=setting/index"
    </script>'; 
  }
  else{
    $_SESSION['message'] = " Data Gagal disimpan ";
    $_SESSION['mType'] = "danger ";
    echo '
    <script>
    window.location = "?r=setting/index"
    </script>'; 
  }
}
function Update($id){
  $kategori=$_POST['kategori']; 
		$deskripsi=$_POST['deskripsi']; 
		
  $query = "UPDATE `setting` SET `kategori` = '$kategori',`deskripsi` = '$deskripsi' WHERE  `id` =  '$id'";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah diubah ";
    $_SESSION['mType'] = "success ";
    echo '
    <script>
    window.location = "?r=setting/index"
    </script>'; 
  }
  else{
    $_SESSION['message'] = " Data Gagal diubah ";
    $_SESSION['mType'] = "danger ";
    echo '
    <script>
    window.location = "?r=setting/index"
    </script>'; 
  }
}
function Delete($id){
  $query = "DELETE FROM `setting` WHERE `id` = '$id'";
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
