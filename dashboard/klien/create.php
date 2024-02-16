
<?php
require_once 'func.php';
?>

        <div class='panel panel-info'>
          <div class='panel-heading'><h3>INPUT KLIEN</h3> </div>
          <div class='panel-body'>
          <form action='' method='POST'>
          
          <div class="form-group">
                <label for="file">Choose Image:</label>
                <input type="file" class="form-control-file" id="image" name='image'>
            </div>
              <div class="form-group">
                <label for="nama"> NAMA:</label>
                <input type="text" class="form-control" id="nama" name='nama' placeholder=''>
              </div>    
              <div class="form-group">
                <label for="deskripsi"> DESKRIPSI:</label>
                <input type="text" class="form-control" id="deskripsi" name='deskripsi' placeholder=''>
              </div><input type='submit' name='insert' value='Save' class='btn btn-sm btn-primary'>
          </form>
          </div>
        </div>
   

