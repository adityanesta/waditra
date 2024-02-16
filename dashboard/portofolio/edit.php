
<?php
require_once 'func.php';
$id = $_POST['id'];
$one = GetOne($id);
?>

        <div class='panel panel-info'>
          <div class='panel-heading'><h3>EDIT PORTOFOLIO</h3></div>
          <div class='panel-body'>
            <form action='' method='POST'>
            <input type='hidden' name='id' value="<?php echo $_POST['id']; ?>">
            <?php
            foreach($one as $data){?>
            
                <div class="form-group">
                  <label for="deskripsi"> PAKET PEKERJAAN:</label>
                  <input type="text" class="form-control" id="deskripsi" name='deskripsi' value="<?php echo $data['deskripsi']; ?>">
                </div>

                <div class="form-group">
                <label for="instansi"> INSTANSI:</label>
                <input type="text" class="form-control" id="instansi" name='instansi' value="<?php echo $data['instansi']; ?>">
              </div>

              <div class="form-group">
                <label for="tahun"> TAHUN:</label>
                <input type="text" class="form-control" id="tahun" name='tahun' value="<?php echo $data['tahun']; ?>">
              </div>

            <?php } ?>
            <input type='submit' name='update' value='Save' class='btn btn-sm btn-warning'>
            </form>

          </div>
        </div>

    
