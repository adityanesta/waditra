
<?php
require_once 'func.php';

?>

<h3>PESAN</h3>
    <br>

    <br>
    <div class='table-responsive'>
    <table class='table table-hover table-bordered table-sm'>
    <thead>
      <tr>
      <th>NO</th>
    <th>NAMA</th> 
<th>EMAIL</th> 
<th>NO HANDPHONE</th> 
<th>PESAN</th> 
<th>STATUS</th> 

      <th colspan='2'>AKSI</th>
      </tr>
      </thead>
      <tbody>
    <?php
      $ga = GetAll();
      $no = 1;
      if(isset($ga)){
      foreach($ga as $data){
        echo "<tr>";
        echo "<td>".$no++."</td>"; 
echo "<td>".$data['nama']."</td>"; 
echo "<td>".$data['email']."</td>"; 
echo "<td>".$data['no_handphone']."</td>"; 
echo "<td>".$data['pesan']."</td>"; 
echo "<td>".$data['status']."</td>"; 
        echo "<td>
        
          <div class=\"btn-group\">
                <form method='POST' action='?r=pesan/edit'>
                <input type='hidden' name='id' value='".$data['id']."'>
                <input type='submit' name='edit' Value='Reply' class='btn btn-warning btn-sm'>

                

                </form>
                &nbsp;
                <form method='POST' action='' onsubmit=\"return confirm('Kamu Yakin Akan Menghapus Data ini ?')\">
                <input type='hidden' name='id' value='".$data['id']."'>
                <input type='submit' name='delete' Value='Delete' class='btn btn-danger btn-sm'>
                </form>
                </div>
                
              </td>";
        echo "</tr>";
    }
  }
      ?>
      

    </tbody>
    </table>
    </div>

   



