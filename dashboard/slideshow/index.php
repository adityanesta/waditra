
<?php
require_once 'func.php';

?>

<h3>SLIDESHOW</h3>
  
    <a href='?r=slideshow/create' class='btn btn-info btn-sm'>TAMBAH</a>
    <br>
  
    <div class='table-responsive'>
    <table class='table table-bordered table-sm'>
    <thead>
      <tr>
      <th>NO</th>
    <th>FOTO</th> 
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
echo "<td>".$data['foto']."</td>"; 


        echo "<td>
        <div class=\"btn-group\" >
                <form method='POST' action='?r=slideshow/edit'>
                <input type='hidden' name='id' value='".$data['id']."'>
                <input type='submit' name='edit' Value='Edit' class='btn btn-warning btn-sm'>

                

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

   



