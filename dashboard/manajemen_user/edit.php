
<?php
require_once 'func.php';
$id = $_POST['id'];
$one = GetOne($id);
?>


    <div class='container'>
      <div class='col-sm-1'></div>
      <div class='col-sm-10'>
        <div class='panel panel-info'>
          <div class='panel-heading'><h3>FORM EDIT PENGGUNA</h3></div>
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
                  <label for="no_hp"> NO HANDPHONE:</label>
                  <input type="text" class="form-control" id="no_hp" name='no_hp' value="<?php echo $data['no_hp']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="email"> EMAIL:</label>
                  <input type="text" class="form-control" id="email" name='email' value="<?php echo $data['email']; ?>">
                </div>
            
                <div class="form-group">
                  <label for="password"> PASSWORD:</label>
                  <input type="text" class="form-control" id="password" name='password' value="<?php echo $data['password']; ?>">
                </div>
                <div class="form-group">
                  <label for="hak_pengguna">HAK PENGGUNA</label>
                  <input type="text" class="form-control" id="hak_pengguna" name='hak_pengguna' value="<?php echo $data['hak_pengguna']; ?>">
                </div>
            
          
              <?php }?>
            <input type='submit' name='update' value='Kirim' class='btn btn-sm btn-warning'>
            </form>

          </div>
        </div>

      