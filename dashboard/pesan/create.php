
<?php
require_once 'func.php';
($_POST );
?>

        <div class='panel panel-info'>
          <div class='panel-heading'>INPUT PESAN </div>
          <div class='panel-body'>
          <form action='' method='POST'>
          
              <div class="form-group">
                <label for="nama"> NAMA:</label>
                <input type="text" class="form-control" id="nama" name='nama' placeholder=''>
              </div>
              <div class="form-group">
                <label for="email"> EMAIL:</label>
                <input type="text" class="form-control" id="email" name='email' placeholder=''>
              </div>
              <div class="form-group">
                <label for="no_handphone"> NO HANDPHONE:</label>
                <input type="text" class="form-control" id="no_handphone" name='no_handphone' placeholder=''>
              </div>
              <div class="form-group">
                <label for="pesan"> PESAN:</label>
                <input type="text" class="form-control" id="pesan" name='pesan' placeholder=''>
              </div>

              </div><input type='submit' name='insert' value='Kirim' class='btn btn-sm btn-primary'>
          </form>
          </div>
        </div>
   

