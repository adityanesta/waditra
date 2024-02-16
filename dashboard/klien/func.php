<?php


function GetAll(){
  $query = "SELECT * FROM klien";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'],
		'image' => $data['image'],
		'nama' => $data['nama'],
		'deskripsi' => $data['deskripsi'],
		
    );
  }
  return $datas;
}

function GetOne($id){
  $query = "SELECT * FROM  `klien` WHERE  `id` =  '$id'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'], 
		'image' => $data['image'],
		'nama' => $data['nama'],
		'deskripsi' => $data['deskripsi'],
		
    );
  }
return $datas;
}

function Insert($id){
    $image=$_POST['image']; 
		$nama=$_POST['nama']; 
    $deskripsi=$_POST['deskripsi']; 
    
  $query = "INSERT INTO `klien` (`id`,`image`,`nama`,`deskripsi`)
VALUES (NULL,'$image','$nama','$deskripsi')";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah disimpan ";
    $_SESSION['mType'] = "success ";
    echo '
    <script>
    window.location = "?r=klien/index"
    </script>'; 
  }
  else{
    $_SESSION['message'] = " Data Gagal disimpan ";
    $_SESSION['mType'] = "danger ";
    echo '
    <script>
    window.location = "?r=klien/index"
    </script>'; 
  }
}
function Update($id){
  $image=$_POST['image']; 
		$nama=$_POST['nama']; 
    $deskripsi=$_POST['deskripsi']; 
		
  $query = "UPDATE `klien` SET `image` = '$image',`nama` = '$nama',`deskripsi` = '$deskripsi' WHERE  `id` =  '$id'";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah diubah ";
    $_SESSION['mType'] = "success ";
    echo '
    <script>
    window.location = "?r=klien/index"
    </script>'; 
  }
  else{
    $_SESSION['message'] = " Data Gagal diubah ";
    $_SESSION['mType'] = "danger ";
    echo '
    <script>
    window.location = "?r=klien/index"
    </script>'; 
  }
}
function Delete($id){
  $query = "DELETE FROM `klien` WHERE `id` = '$id'";
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
