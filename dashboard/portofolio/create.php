
<?php
require_once 'func.php';
($_POST );
?>

        <div class='panel panel-info'>
          <div class='panel-heading'>INPUT PORTOFOLIO </div>
          <div class='panel-body'>
          <form action='' method='POST'>
          
              <div class="form-group">
                <label for="deskripsi"> PAKET PEKERJAAN:</label>
                <input type="text" class="form-control" id="deskripsi" name='deskripsi' placeholder=''>
              </div>

              <div class="form-group">
                <label for="instansi"> INSTANSI:</label>
                <input type="text" class="form-control" id="instansi" name='instansi' placeholder=''>
              </div>

              <div class="form-group">
                <label for="tahun"> TAHUN:</label>
                <input type="text" class="form-control" id="tahun" name='tahun' placeholder=''>
              </div>

              </div><input type='submit' name='insert' value='Kirim' class='btn btn-sm btn-primary'>
          </form>
          </div>
        </div>
   

