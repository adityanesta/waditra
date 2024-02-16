
<?php
require_once 'func.php';

?>

<h3>FAQ</h3>
  
    <a href='?r=faq/create' class='btn btn-info btn-sm'>TAMBAH</a>
    <br>
  
    <div class='table-responsive'>
    <table class='table table-bordered table-sm'>
    <thead>
      <tr>
      <th>NO</th>
    <th>PERTANYAAN</th>
    <th>JAWABAN</th> 
  
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
        echo "<td>".$data['deskripsi']."</td>"; 
echo "<td>".$data['jawaban']."</td>"; 


        echo "<td>
        <div class=\"btn-group\" >
                <form method='POST' action='?r=faq/edit'>
                <input type='hidden' name='id' value='".$data['id']."'>
                <input type='submit' name='jawab' Value='jawab' class='btn btn-warning btn-sm'>

                

                </form>
                &nbsp;
                <form method='POST' action=''>
                <input type='hidden' name='id' value='".$data['id']."'>
                <input type='submit' name='delete' Value='Delete' class='btn btn-danger btn-sm'>
                </form>
                </div>
              </td>";
        echo "
             
                </tr>";
    }
  }
      ?>
      

    </tbody>
    </table>
    </div>

   



