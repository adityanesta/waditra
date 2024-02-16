
<?php
require_once 'func.php';
$id = $_POST['id'];
$one = GetOne($id);
 
?>

        <div class='panel panel-info'>
          <div class='panel-heading'><h3> PESAN</h3> </div>
          <div class='panel-body'>
            <form action='' method='POST'>
            <input type='hidden' name='id' value="<?php echo $_POST['id']; ?>">
            <?php
            foreach($one as $data){?>
               
                <div class="form-group">
                  <label for="nama"> NAMA:</label>
                  <input type="text" class="form-control" id="nama" name='nama' value="<?php echo $data['nama']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="email"> EMAIL:</label>
                  <input type="text" class="form-control" id="email" name='email' value="<?php echo $data['email']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="no_handphone"> NO HANDPHONE:</label>
                  <input type="text" class="form-control" id="no_handphone" name='no_handphone' value="<?php echo $data['no_handphone']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="pesan "> PESAN:</label>
                  <input type="text " class="form-control " id="pesan" name='pesan' value="<?php echo $data['pesan']; ?>">
                </div>

              
            <?php } ?>
            <input type='submit' name='update' value='kembali' class='btn btn-sm btn-warning'>
             <input type='submit' name='verifikasi' Value='Reply' class='btn btn-success btn-sm'>
            </form>

          </div>
        </div>

    
