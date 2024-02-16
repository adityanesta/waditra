<?php


function GetAll(){
  $query = "SELECT * FROM portofolio";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'],
		'deskripsi' => $data['deskripsi'],
    'instansi' => $data['instansi'],
    'tahun' => $data['tahun'],
    'tgl_input' => $data['tgl_input'],
    );
  }
  return $datas;
}

function GetOne($id){
  $query = "SELECT * FROM  `portofolio` WHERE  `id` =  '$id'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'], 
		'deskripsi' => $data['deskripsi'], 
    'instansi' => $data['instansi'],
    'tahun' => $data['tahun'],
    );
  }
return $datas;
}

function Insert($id){
		$deskripsi=$_POST['deskripsi'];
    $instansi=$_POST['instansi'];
    $tahun=$_POST['tahun'];
    $tgl_input=$_POST['tgl_input'];
  $query = "INSERT INTO `portofolio` (`id`,`deskripsi`,`instansi`,`tahun`,`tgl_input`)
VALUES (NULL,'$deskripsi','$instansi','$tahun','$tgl_input')";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah disimpan ";
    $_SESSION['mType'] = "success ";
    echo '
    <script>
    window.location = "?r=portofolio/index"
    </script>'; 
  }
  else{
    $_SESSION['message'] = " Data Gagal disimpan ";
    $_SESSION['mType'] = "danger ";
    echo '
    <script>
    window.location = "?r=portofolio/index"
    </script>'; 
  }
}
function Update($id){
  $komoditas=$_POST['portofolio']; 
		$deskripsi=$_POST['deskripsi']; 
    $instansi=$_POST['instansi'];
    $tahun=$_POST['tahun'];
  $query = "UPDATE `portofolio` SET `deskripsi` = '$deskripsi', `instansi` = '$instansi', `tahun` = '$tahun' WHERE  `id` =  '$id'";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah diubah ";
    $_SESSION['mType'] = "success ";
    echo '
    <script>
    window.location = "?r=portofolio/index"
    </script>'; 
  }
  else{
    $_SESSION['message'] = " Data Gagal diubah ";
    $_SESSION['mType'] = "danger ";
    echo '
    <script>
    window.location = "?r=portofolio/index"
    </script>'; 
  }
}
function Delete($id){
  $query = "DELETE FROM `portofolio` WHERE `id` = '$id'";
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
