
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                <img src="../assets/img/waditra.webp" width="30" height="30" rel="stylesheet">
                </div>
                <div class="sidebar-brand-text mx-3">PT Waditra Reka Cipta<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

                  <!-- Nav Item - Dashboard -->
                  <li class="nav-item">
                <a class="nav-link" href="?r=welcome/index">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
         

             <?php if($_SESSION['hak']== "admin"){ ?>
            <li class="nav-item">
                <a class="nav-link" href="?r=konten_statis/index">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Konten Statis</span></a>
                    </li>
            <?php }?>


            <?php if($_SESSION['hak']== "admin"){ ?>
            <li class="nav-item">
                <a class="nav-link" href="?r=klien1/index">
                    <i class="fas fa-fw fa-poll"></i>
                    <span>Klien</span></a>
            </li>
            <?php }?>
            <!-- Nav Item - Charts -->
          
             
            <?php if($_SESSION['hak']== "admin"){ ?>
            <li class="nav-item">
                <a class="nav-link" href="?r=portofolio/index">
                    <i class="fas fa-fw fa-poll"></i>
                    <span>Portofolio</span></a>
            </li>
            <?php }?>

               <li class="nav-item">
                <a class="nav-link" href="?r=team/index">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Team</span></a>
            </li>
                
            
            <?php if($_SESSION['hak']== "admin"){ ?>
            <li class="nav-item">
                <a class="nav-link" href="?r=setting/index">
                    <i class="fas fa-fw fa-poll"></i>
                    <span>Setting</span></a>
            </li>
            <?php }?>

            <?php if($_SESSION['hak']== "admin"){ ?>
            <li class="nav-item">
                <a class="nav-link" href="?r=slideshow/index">
                    <i class="fas fa-fw fa-poll"></i>
                    <span>Slideshow</span></a>
            </li>
            <?php }?>


            <?php if($_SESSION['hak']== "admin"){ ?>
            <li class="nav-item">
                <a class="nav-link" href="?r=pesan/index">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pesan</span></a>
            </li>
            <?php } ?>

            <?php if($_SESSION['hak']== "admin"){ ?>
            <li class="nav-item">
                <a class="nav-link" href="?r=faq/index">
                    <i class="fas fa-fw fa-poll"></i>
                    <span>FAQ</span></a>
            </li>
            <?php }?>

         

            <?php if($_SESSION['hak']== "admin"){ ?>
            <li class="nav-item">
                <a class="nav-link" href="?r=manajemen_user/index">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Manajemen User</span></a>
            </li>
            <?php }?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['nama']; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                <form method='POST' action='?r=pengguna/profile'>
                <input type='hidden' name='id' value="<?= $_SESSION['id']; ?>">
                                
        
                   <button type='submit' name='edit' class='dropdown-item'> <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ubah Akun</button>
                </form>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" target="_blank" rel="nofollow" href="../index.php"><i class="fas fa-laptop fa-sm fa-fw mr-2 text-gray-400"></i>
                                   
                                    Lihat Website
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card">
                    <div class="card-body">


                    
