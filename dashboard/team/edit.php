
<?php
require_once 'func.php';
$id = $_POST['id'];
$one = GetOne($id);
?>

        <div class='panel panel-info'>
          <div class='panel-heading'><h3>EDIT TEAM</h3></div>
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
                  <label for="jabatan"> POSISI/JABATAN:</label>
                <select  class="form-control" id="jabatan" name='jabatan' value="<?php echo $data['jabatan']; ?>">
              option value="">-- PILIH KATEGORI --</option>
                <option>Komisaris</option>
                <option>Asisten</option>
                <option>Manajer</option>
                <option>Administrasi</option>
              </select>
                </div>

            <?php } ?>
            <input type='submit' name='update' value='Save' class='btn btn-sm btn-warning'>
            </form>

          </div>
        </div>

    
