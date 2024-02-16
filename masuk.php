<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/aa6d4ad8a90a3973dda69aa708e4d871__1_-removebg-preview.png">
    <title>Waditra - Masuk</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['auth_msg'])){
    ?>
    <span style="color :red;">
        <?= $_SESSION['auth_msg']; ?>
    </span>
    <?php } ?>
    
    <div class="box">
        <span class="borderLine"></span>
         <form action="proses_login.php" method="POST">
        <form>
            <center><img src="assets/img/aa6d4ad8a90a3973dda69aa708e4d871__1_-removebg-preview.png" width="120" height="50"></center>
            <div class="inputBox">
                <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp"
                    value="admin@admin.com" placeholder="Enter Email Address..." name="email" required>
                <span>email</span>
                <i></i>
            </div>
            <div class="inputBox">
                <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" value="admin"
                    placeholder="Password" required>
                <span>Password</span>
                <i></i>
            </div>
            <div class="links">
               <left><a href="daftar.php"></a></left> <a href="daftar.php">Daftar</a>
            </div>
            <input type="submit" value="Login">
            
        </form>
    </div>
</body>
</html>