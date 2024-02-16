
<?php
require_once 'func.php';
$id = $_POST['id'];
$one = GetOne($id);
?>

        <div class='panel panel-info'>
          <div class='panel-heading'><h3>FORM JAWABAN FAQ</h3></div>
          <div class='panel-body'>
            <form action='' method='POST'>
            <input type='hidden' name='id' value="<?php echo $_POST['id']; ?>">
            <?php
            foreach($one as $data){?>
             
            
                <div class="form-group">
                  <label for="deskripsi"> PERTANYAAN:</label>
                  <input type="text" class="form-control" id="deskripsi" name='deskripsi' value="<?php echo $data['deskripsi']; ?>">
                </div>
              
                <div class="form-group">
                  <label for="jawaban"> JAWABAN:</label>
                  <input type="text" class="form-control" id="jawaban" name='jawaban' value="<?php echo $data['jawaban']; ?>">
                </div>
            <?php } ?>
            <input type='submit' name='update' value='Kirim' class='btn btn-sm btn-warning'>
            </form>

          </div>
        </div>

    
