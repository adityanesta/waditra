
<?php
require_once 'func.php';

?>


<h3>Verifikasi Pesan</h3>

    <br>
    <div class='table-responsive'>
    <table class='table table-hover table-bordered table-sm'>
    <thead>
      <tr>
      <th>No</th>
    <th>nama</th> 
<th>email</th> 
<th>no handphone</th> 
<th>pesan</th> 
<th>status</th> 

      <th colspan='2'>Persetujuan</th>
      </tr>
      </thead>
      <tbody>
    <?php
      $ga = GetByStatus();
      $no = 1;
      if(isset($ga)){
      foreach($ga as $data){
        echo "<tr>";
        echo "<td>".$no++."</td>"; 
echo "<td>".$data['nama']."</td>"; 
echo "<td>".$data['email']."</td>"; 
echo "<td>".$data['no_handphone']."</td>"; 
echo "<td>".$data['pesan']."</td>"; 
echo "<td><font color='red'>".$data['status']."</font></td>"; 

        echo "<td>
                 <div class=\"btn-group\">
                <form method='POST' action=''>
                <input type='hidden' name='id' value='".$data['id']."'>
                <input type='submit' name='verifikasi' Value='Verifikasi' class='btn btn-success btn-sm'>

                

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

   



