
<?php
require_once 'func.php';
?>

        <div class='panel panel-info'>
          <div class='panel-heading'><h3>INPUT TEAM</h3></div>
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
                <label for="jabatan">POSISI/JABATAN</label>
                <select  class="form-control" id="jabatan" name='jabatan'>
              <option value="">-- PILIH KATEGORI --</option>
                <option>Komisaris</option>
                <option>Asisten</option>
                <option>Manajer</option>
                <option>Administrasi</option>
              </select>
              </div>
                <input type="hidden" class="form-control" id="id_pengguna" name='id_pengguna' placeholder='id_pengguna'  value="<?php echo $_SESSION['id']; ?>">
              </div><input type='submit' name='insert' value='Kirim' class='btn btn-sm btn-primary'>
          </form>
          </div>
        </div>
   

