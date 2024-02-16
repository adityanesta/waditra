
<?php
require_once 'func.php';
$id = $_POST['id'];
$one = GetOne($id);
?>

        <div class='panel panel-info'>
          <div class='panel-heading'><h3>EDIT KLIEN</h3></div>
          <div class='panel-body'>
            <form action='' method='POST'>
            <input type='hidden' name='id' value="<?php echo $_POST['id']; ?>">
            <?php
            foreach($one as $data){?>
               
               <div class="form-group">
         <img width='200px' height='150px' src='<?=$row1["image"]?>'>
         <div>
            <label for="file">Choose Image:</label>
            <input type="text" id="existingImage" class="form-control" value="<?=$row1['image']?>" hidden>
            <input type="file" id="newImage" value="">
         </div>
            
                <div class="form-group">
                  <label for="nama"> NAMA:</label>
                  <input type="text" class="form-control" id="nama" name='nama' value="<?php echo $data['nama']; ?>">
                </div>

                <div class="form-group">
                  <label for="deskripsi"> DESKRIPSI:</label>
                  <input type="text" class="form-control" id="deskripsi" name='deskripsi' value="<?php echo $data['deskripsi']; ?>">
                </div>
            
            <?php } ?>
            <input type='submit' name='update' value='Save' class='btn btn-sm btn-warning'>
            </form>

          </div>
        </div>

    
