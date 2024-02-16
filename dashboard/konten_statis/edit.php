
<?php
require_once 'func.php';
$id = $_POST['id'];
$one = GetOne($id);
?>

        <div class='panel panel-info'>
          <div class='panel-heading'><h3>EDIT KONTEN STATIS</h3></div>
          <div class='panel-body'>
            <form action='' method='POST'>
            <input type='hidden' name='id' value="<?php echo $_POST['id']; ?>">
            <?php
            foreach($one as $data){?>
            
                <div class="form-group">
                  <label for="deskripsi">JUDUL:</label>
                  <input type="text" class="form-control" id="deskripsi" name='deskripsi' value="<?php echo $data['deskripsi']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="visi_dan_misi"> DESKRIPSI:</label>
                  <input type="text" class="form-control" id="visi_dan_misi" name='visi_dan_misi' value="<?php echo $data['visi_dan_misi']; ?>">
                </div>

            <?php } ?>
            <input type='submit' name='update' value='Save' class='btn btn-sm btn-warning'>
            </form>

          </div>
        </div>

    
