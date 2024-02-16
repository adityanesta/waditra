
<?php
require_once 'func.php';
$id = $_POST['id'];
$one = GetOne($id);
?>

        <div class='panel panel-info'>
          <div class='panel-heading'><h3>EDIT KATEGORI</h3></div>
          <div class='panel-body'>
            <form action='' method='POST'>
            <input type='hidden' name='id' value="<?php echo $_POST['id']; ?>">
            <?php
            foreach($one as $data){?>
               
                <div class="form-group">
                  <label for="kategori"> KATEGORI:</label>
                  <select  class="form-control" id="kategori" name='Kategori' value="<?php echo $data['kategori']; ?>">
              option value="">-- PILIH KATEGORI --</option>
                <option>Komisaris</option>
                <option>Asisten</option>
                <option>Manajer</option>
                <option>Administrasi</option>
              </select>
            
                <div class="form-group">
                  <label for="deskripsi"> DESKRIPSI:</label>
                  <input type="text" class="form-control" id="deskripsi" name='deskripsi' value="<?php echo $data['deskripsi']; ?>">
                </div>
            
            <?php } ?>
            <input type='submit' name='update' value='Save' class='btn btn-sm btn-warning'>
            </form>

          </div>
        </div>

    
