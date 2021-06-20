<?php
include_once('config.php'); 
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo PATH; ?>" class="brand-link">
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
           <i class="nav-icon fas fa-store" style="display: inline-block;border-radius: 60px;box-shadow: 0px 0px 2px #888;padding: 0.5em 0.6em;"></i>
        <span class="brand-text font-weight-light"> Jaroon Freelance</span>
    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo PATH; ?>/AdminLTE-3.0.5/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">ชยพัทธิ์ นิโรภาส</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>" class="nav-link">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            หน้าแรก
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>" class="nav-link">
                        <i class="nav-icon fa fa-shopping-cart"></i>
                        <p>
                            รายการสั่งซื้อ
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>" class="nav-link">
                        <i class="nav-icon fas fa-registered"></i>
                        <p>
                            รายการลงทะเบียน
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/sale-page" class="nav-link">
                        <i class="nav-icon fa fa-edit"></i>
                        <p>
                            ข้อมูลเซลเพจ
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>" class="nav-link">
                        <i class="nav-icon fab fa-product-hunt"></i>
                        <p>
                            ข้อมูลสินค้า
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>" class="nav-link">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            ข้อมูลผู้ใช้งาน
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>" class="nav-link">
                        <i class="nav-icon fa fa-share-alt"></i>
                        <p>
                            แนะนำเพื่อน
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>" class="nav-link">
                        <i class="nav-icon fas fa-sms"></i>
                        <p>
                            SMS
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>" class="nav-link">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            ตั้งค่าและการชำระเงิน
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo PATH; ?>/logout.php" class="nav-link">
                        <i class="nav-icon fa fa-sign-out-alt"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>                 
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>