
<?php
require_once 'func.php';

?>

<h3>TEAM</h3>
   
    <a href='?r=team/create' class='btn btn-info btn-sm'>TAMBAH</a>
    <br>

    <div class='table-responsive'>
    <table class='table table-bordered table-sm' align="center">
    <thead align="">
      <tr>
      <th>NO</th>
    <th>NAMA</th> 
<th>EMAIL</th> 
<th>NO HANDPHONE</th> 
<th>POSISI/JABATAN</th> 

      <th colspan='2'>AKSI</th>
      </tr>
      </thead>
      <tbody>
    <?php
     if($_SESSION['hak']== "admin"){
      $ga = GetAll();
     }
     else{
      $ga = GetByUser($_SESSION['id']);
     }
  


      $no = 1;
      if(isset($ga)){
      foreach($ga as $data){
        echo "<tr>";
        echo "<td>".$no++."</td>"; 
echo "<td>".$data['nama']."</td>"; 
echo "<td>".$data['email']."</td>"; 
echo "<td>".$data['no_handphone']."</td>"; 
echo "<td>".$data['jabatan']."</td>";


        echo "<td>
        <div class=\"btn-group\" >

                <form method='POST' action='?r=team/edit'>
                <input type='hidden' name='id' value='".$data['id']."'>
                <input type='submit' name='edit' Value='Edit' class='btn btn-warning btn-sm'>

                

                </form>
                &nbsp;
                 <form method='POST' action=''>
                <input type='hidden' name='id' value='".$data['id']."'>
                <input type='submit' name='delete' Value='Delete' class='btn btn-danger btn-sm'>
                </form>
              </td>
              </div>
              ";
        echo "</tr>";
    }
  }
      ?>
      

    </tbody>
    </table>
    </div>

   



