<?php


function GetAll(){
  $query = "SELECT * FROM faq";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'],
		'jawaban' => $data['jawaban'],
		'deskripsi' => $data['deskripsi'],
    'tgl_input' => $data['tgl_input'],
		'tgl_diubah' => $data['tgl_diubah'],
		
    );
  }
  return $datas;
}

function GetOne($id){
  $query = "SELECT * FROM  `faq` WHERE  `id` =  '$id'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'], 
    'jawaban' => $data['jawaban'],
		'deskripsi' => $data['deskripsi'],
    );
  }
return $datas;
}

function Insert($id){
  $jawaban=$_POST['jawaban']; 
		$deskripsi=$_POST['deskripsi']; 
		$tgl_input=$_POST['tgl_input']; 
		$tgl_diubah=$_POST['tgl_diubah']; 
  $query = "INSERT INTO `faq` (`id`,`jawaban`,`deskripsi`,`tgl_input`,`tgl_diubah`)
VALUES (NULL,'$jawaban','$deskripsi','$tgl_input','$tgl_diubah')";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah disimpan ";
    $_SESSION['mType'] = "success ";
    echo '
    <script>
    window.location = "?r=faq/index"
    </script>'; 
  }
  else{
    $_SESSION['message'] = " Data Gagal disimpan ";
    $_SESSION['mType'] = "danger ";
    echo '
    <script>
    window.location = "?r=faq/index"
    </script>'; 
  }
}
function Update($id){
  $jawaban=$_POST['jawaban']; 
  $deskripsi=$_POST['deskripsi']; 
  $tgl_input=$_POST['tgl_input']; 
  $tgl_diubah=$_POST['tgl_diubah']; 
  $query = "UPDATE `faq` SET `jawaban` = '$jawaban',`deskripsi` = '$deskripsi',`tgl_input` = '$tgl_input',`tgl_diubah` = '$tgl_diubah'  WHERE  `id` =  '$id'";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah diubah ";
    $_SESSION['mType'] = "success ";
    echo '
    <script>
    window.location = "?r=faq/index"
    </script>'; 
  }
  else{
    $_SESSION['message'] = " Data Gagal diubah ";
    $_SESSION['mType'] = "danger ";
    echo '
    <script>
    window.location = "?r=faq/index"
    </script>'; 
  }
}
function Delete($id){
  $query = "DELETE FROM `faq` WHERE `id` = '$id'";
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
  Insert($_POST['id']);
}
else if(isset($_POST['update'])){
  Update($_POST['id']);
}
else if(isset($_POST['delete'])){
  Delete($_POST['id']);
}
?>
