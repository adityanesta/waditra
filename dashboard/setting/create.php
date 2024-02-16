
<?php
require_once 'func.php';
?>

        <div class='panel panel-info'>
          <div class='panel-heading'><h3>FInput setting</h3> </div>
          <div class='panel-body'>
          <form action='' method='POST'>
          
              <div class="form-group">
                <label for="kategori"> KATEGORI:</label>
                <select  class="form-control" id="kategori" name='kategori'>
              <option value="">-- PILIH KATEGORI --</option>
                <option>instagram</option>
                <option>facebook</option>
                <option>twitter</option>
                <option>whatsapp</option>
                <option>linkedin</option>
              </select>
              </div>
              <div class="form-group">
                <label for="deskripsi"> DESKRIPSI:</label>
                <input type="text" class="form-control" id="deskripsi" name='deskripsi' placeholder='deskripsi'>
              </div><input type='submit' name='insert' value='Save' class='btn btn-sm btn-primary'>
          </form>
          </div>
        </div>
   

