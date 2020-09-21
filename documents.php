<?php
session_start();
ob_flush();
ob_start();
require ("../dbconfig/config.php");
$object=new model();

if (! isset($_SESSION['admin']))
{
    header("location:forms/auth-login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>اسناد</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->

    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body>

<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
            <div class="form-inline mr-auto">
                <ul class="navbar-nav mr-3">
                    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"><i
                                    class="fas fa-bars"></i></a></li>
                    <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                            <i class="fas fa-expand"></i>
                        </a>
                    </li>
                    <li>
                        <div class="search-group">
                <span class="nav-link nav-link-lg" id="search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </span>
                            <input type="text" class="search-control" placeholder="search" aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav navbar-right">
                <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                                                             class="nav-link notification-toggle nav-link-lg"><i class="far fa-bell"></i><span class="notification-count bg-green">4</span></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                        <div class="dropdown-header">Notifications
                            <div class="float-right">
                                <a href="#">Mark All As Read</a>
                            </div>
                        </div>
                        <div class="dropdown-list-content dropdown-list-icons">
                            <a href="#" class="dropdown-item dropdown-item-unread">
                  <span class="dropdown-item-icon l-bg-green text-white">
                    <i class="fas fa-shopping-cart"></i>
                  </span>
                                <span class="dropdown-item-desc">
                    5 sales Product
                    <span class="time">8 Hours Ago</span>
                  </span>
                            </a>
                            <a href="#" class="dropdown-item dropdown-item-unread">
                  <span class="dropdown-item-icon l-bg-orange text-white">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                  </span>
                                <span class="dropdown-item-desc">
                    10 Customers Inquiry
                    <span class="time">7 Hours Ago</span>
                  </span>
                            </a>
                            <a href="#" class="dropdown-item">
                  <span class="dropdown-item-icon l-bg-yellow text-white">
                    <i class="fa fa-server" aria-hidden="true"></i>
                  </span>
                                <span class="dropdown-item-desc">
                    Your Subscription Expired
                    <span class="time">10 Hours Ago</span>
                  </span>
                            </a>
                            <a href="#" class="dropdown-item">
                  <span class="dropdown-item-icon l-bg-blue text-white">
                    <i class="fas fa-user-edit" aria-hidden="true"></i>
                  </span>
                                <span class="dropdown-item-desc">
                    Update Profile
                    <span class="time">9 Hours Ago</span>
                  </span>
                            </a>
                            <a href="#" class="dropdown-item">
                  <span class="dropdown-item-icon l-bg-purple text-white">
                    <i class="far fa-envelope" aria-hidden="true"></i>
                  </span>
                                <span class="dropdown-item-desc">
                    10 Email Notifications
                    <span class="time">Yesterday</span>
                  </span>
                            </a>
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </li>
                <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown"
                                                             class="nav-link nav-link-lg beep"><i class="far fa-envelope"></i></a>
                    <div class="dropdown-menu dropdown-list dropdown-menu-right">
                        <div class="dropdown-header">Messages
                            <div class="float-right">
                                <a href="#">Mark All As Read</a>
                            </div>
                        </div>
                        <div class="dropdown-list-content dropdown-list-message">
                            <a href="#" class="dropdown-item">
                  <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-5.png" class="image-square">
                  </span>
                                <span class="dropdown-item-desc">
                    <span class="message-user">Sophie Walker</span>
                    <span class="time messege-text">Project Planning</span>
                    <span class="time">10 Minutes Ago</span>
                  </span>
                            </a>
                            <a href="#" class="dropdown-item">
                  <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-4.png" class="image-square">
                  </span>
                                <span class="dropdown-item-desc">
                    <span class="message-user">Ryan Porter</span>
                    <span class="time messege-text">Project Analysis</span>
                    <span class="time">2 Hours Ago</span>
                  </span>
                            </a>
                            <a href="#" class="dropdown-item">
                  <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-1.png" class="image-square">
                  </span>
                                <span class="dropdown-item-desc">
                    <span class="message-user">Robert Nelson</span>
                    <span class="time messege-text">Leave application !!</span>
                    <span class="time">4 Hours Ago</span>
                  </span>
                            </a>
                            <a href="#" class="dropdown-item">
                  <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="image-square">
                  </span>
                                <span class="dropdown-item-desc">
                    <span class="message-user">Clara Martin</span>
                    <span class="time messege-text">Client meeting</span>
                    <span class="time">1 Day Ago</span>
                  </span>
                            </a>
                            <a href="#" class="dropdown-item">
                  <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-3.png" class="image-square">
                  </span>
                                <span class="dropdown-item-desc">
                    <span class="message-user">Kevin Rogers</span>
                    <span class="time messege-text">Discussion about Issues</span>
                    <span class="time">3 Days Ago</span>
                  </span>
                            </a>
                            <a href="#" class="dropdown-item">
                  <span class="dropdown-item-avatar text-white">
                    <img alt="image" src="assets/img/users/user-2.png" class="image-square">
                  </span>
                                <span class="dropdown-item-desc">
                    <span class="message-user">Clara Martin</span>
                    <span class="time messege-text">Team meeting</span>
                    <span class="time text-primary">5 Days Ago</span>
                  </span>
                            </a>
                        </div>
                        <div class="dropdown-footer text-center">
                            <a href="#">View All <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </li>

                <li class="dropdown"><a href="#" data-toggle="dropdown"
                                        class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="assets/img/user.png" class="user-img-radious-style">
                        <span class="d-sm-none d-lg-inline-block"></span></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-title">Hello Alexa Lopez</div>
                        <a href="profile.html" class="dropdown-item has-icon">
                            <i class="far fa-user"></i> Profile
                        </a>
                        <a href="timeline.html" class="dropdown-item has-icon">
                            <i class="fas fa-bolt"></i> Activities
                        </a>
                        <a href="" class="dropdown-item has-icon">
                            <i class="fas fa-cog"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="auth-login.html" class="dropdown-item has-icon text-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="main-sidebar sidebar-style-2">
            <aside id="sidebar-wrapper">
                <div class="sidebar-brand">
                    <a href="index.html">
                        <img alt="image" src="assets/img/logo.png" class="header-logo" />
                        <span class="logo-name">LEMOXIN</span>
                    </a>
                </div>
                <ul class="sidebar-menu">
                    <li class="dropdown active" style="display: block;">
                        <div class="sidebar-profile">
                            <div class="siderbar-profile-pic">
                                <img src="assets/img/users/user-6.png" class="profile-img-circle box-center" alt="User Image">
                            </div>
                            <div class="siderbar-profile-details">
                                <div class="siderbar-profile-name"><?php if(isset($_SESSION['admin'])) { echo ($_SESSION['admin']['firstname']." ".$_SESSION['admin']['lastname']);} ?> </div>
                                <div class="siderbar-profile-position">Manager </div>
                            </div>
                            <div class="sidebar-profile-buttons">
                                <a class="tooltips waves-effect waves-block toggled" href="profile.html" data-toggle="tooltip" title="" data-original-title="پروفایل">
                                    <i class="fas fa-user sidebarQuickIcon"></i>
                                </a>
                                <a class="tooltips waves-effect waves-block" href="email-inbox.html" data-toggle="tooltip" title="" data-original-title="ایمیل">
                                    <i class="fas fa-envelope sidebarQuickIcon"></i>
                                </a>
                                <a class="tooltips waves-effect waves-block" href="support.html" data-toggle="tooltip" title="" data-original-title="پشتیبانی آنلاین">
                                    <i class="fas fa-comment-dots  sidebarQuickIcon"></i>
                                </a>
                                <a class="tooltips waves-effect waves-block" href="logout.php" data-toggle="tooltip" title="" data-original-title="خروج از حساب کاربری">
                                    <i class="fas fa-share-square sidebarQuickIcon"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="menu-header">Main</li>
                    <li class="dropdown">
              <a href="../admin/index.php" class="nav-link"><i class="fas fa-desktop"></i><span>داشبورد</span></a>
            </li>
             <li class="dropdown active">
               <a href="#" class="nav-link has-dropdown"><i class="fas fa-desktop"></i><span>اسناد</span></a>
             </li>
             <li class="menu-header">Components</li>
             <li class="dropdown">
               <a href="#" class="nav-link has-dropdown"><i class="fas fa-shopping-bag"></i><span>منابع مالی</span></a>
               <ul class="dropdown-menu">
                 <li><a class="nav-link" href="../admin/deposit to broker.php">واریز به کارگزاری</a></li>
                 <li><a class="nav-link" href="../admin/Withdrawal Form Broker.php"> برداشت از کارگزاری</a></li>
               </ul>
             </li>
             
             
             <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-credit-card"></i><span>وبمانی و پرفکت مانی</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="../admin/sales webmani.php">فروش وبمانی و پرفکت مانی</a></li>
                <li><a class="nav-link" href="../admin/buy webmani.php">خرید وبمانی و پرفکت مانی</a></li>
              </ul> 

            <li>
              <a class="nav-link" href="add-trading-signals.php"><i class="far fa-calendar-alt"></i><span>سیگنال های معاملاتی</span></a>
            </li>

            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-mars-stroke-h"></i><span>رمز ها</span></a>
              <ul class="dropdown-menu">
                <li><a href="forms/auth-reset-password.html">تغییر کلمه ی عبور</a></li>
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-tie"></i><span>تایید حساب کاربری </span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="../admin/user-information.php">اطلاعات کاربر</a></li>
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-credit-card"></i><span>کارت بانکی</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="../admin/add a bank card.php">افزودن کارت بانکی</a></li>
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="timeline.html" class="nav-link"><i class="fas fa-globe"></i><span>زبان</span></a>
            </li>
            
            <li class="dropdown">
              <a href="../admin/support.php" class="nav-link"><i class="fas fa-comment-dots"></i><span>پشتیبانی آنلاین</span></a>
            </li>
                </ul>
            </aside>
        </div>
        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="section-header-breadcrumb-content">
                                <h1>اسناد</h1>
                                <div class="section-header-breadcrumb">
                                    <div class="breadcrumb-item active"><a href="#"><i class="fas fa-home"></i></a></div>
                                    <div class="breadcrumb-item"><a href="#">اسناد</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="section-header-breadcrumb-chart float-right">
                                <div class="breadcrumb-chart m-l-50">
                                    <div class="float-right">
                                        <div class="icon m-b-10">
                                            <div class="chart header-bar">
                                                <canvas width="49" height="40" ></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-right m-r-5 m-l-10 m-t-1">
                                        <div class="chart-info">
                                            <span>$10,415</span>
                                            <p>Last Week</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="breadcrumb-chart m-l-50">
                                    <div class="float-right">
                                        <div class="icon m-b-10">
                                            <div class="chart header-bar2">
                                                <canvas width="49" height="40" ></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="float-right m-r-5 m-l-10 m-t-1">
                                        <div class="chart-info">
                                            <span>$22,128</span>
                                            <p>Last Month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>کاربران</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                                            <thead>
                                            <tr>
                                                <th>نام</th>
                                                <th>نام خانوادگی</th>
                                                <th>ایمیل</th>
                                                <th>شماره تلفن</th>
                                                <th>وضعیت</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $result=$object->selected("*","`users`"," where `status`=0  order by `id` DESC");
                                            if($result->rowCount()>0)
                                            {
                                                while($rows=$result->fetch())
                                                {

                                                    ?>
                                                    <tr>
                                                        <td><?= $rows['firstname'] ?></td>
                                                        <td><?= $rows['lastname'] ?></td>
                                                        <td><?= $rows['email'] ?></td>
                                                        <td><?= $rows['mobile'] ?></td>
                                                        <?php
                                                        if($rows['state']==0)
                                                        {
                                                            ?>
                                                            <td style="color: rgb(245, 0, 0);font-weight: 700;">inactiv</td>
                                                            <?php
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                            <td style="color: rgb(0, 167, 0);font-weight: 700;">active</td>
                                                            <?php
                                                        }
                                                        ?>


                                                    </tr>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <div class="settingSidebar">
                <a href="javascript:void(0)" class="settingPanelToggle"> <i
                            class="fa fa-spin fa-cog"></i>
                </a>
                <div class="settingSidebar-body ps-container ps-theme-default">
                    <div class=" fade show active">
                        <div class="setting-panel-header">Theme Customizer</div>
                        <div class="p-15 border-bottom">
                            <h6 class="font-medium m-b-10">Theme Layout</h6>
                            <div class="selectgroup layout-color w-50">
                                <label> <span class="control-label p-r-20">Light</span>
                                    <input type="radio" name="custom-switch-input" value="1"
                                           class="custom-switch-input" checked> <span
                                            class="custom-switch-indicator"></span>
                                </label>
                            </div>
                            <div class="selectgroup layout-color  w-50">
                                <label> <span class="control-label p-r-20">Dark&nbsp;</span>
                                    <input type="radio" name="custom-switch-input" value="2"
                                           class="custom-switch-input"> <span
                                            class="custom-switch-indicator"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Sidebar Colors</h6>
                        <div class="sidebar-setting-options">
                            <ul class="sidebar-color list-unstyled mb-0">
                                <li title="white" class="active">
                                    <div class="white"></div>
                                </li>
                                <li title="blue">
                                    <div class="blue"></div>
                                </li>
                                <li title="coral">
                                    <div class="coral"></div>
                                </li>
                                <li title="purple">
                                    <div class="purple"></div>
                                </li>
                                <li title="allports">
                                    <div class="allports"></div>
                                </li>
                                <li title="barossa">
                                    <div class="barossa"></div>
                                </li>
                                <li title="fancy">
                                    <div class="fancy"></div>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Theme Colors</h6>
                        <div class="theme-setting-options">
                            <ul class="choose-theme list-unstyled mb-0">
                                <li title="white" class="active">
                                    <div class="white"></div>
                                </li>
                                <li title="blue">
                                    <div class="blue"></div>
                                </li>
                                <li title="coral">
                                    <div class="coral"></div>
                                </li>
                                <li title="purple">
                                    <div class="purple"></div>
                                </li>
                                <li title="allports">
                                    <div class="allports"></div>
                                </li>
                                <li title="barossa">
                                    <div class="barossa"></div>
                                </li>
                                <li title="fancy">
                                    <div class="fancy"></div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="p-15 border-bottom">
                        <h6 class="font-medium m-b-10">Layout Options</h6>
                        <div class="theme-setting-options">
                            <label> <span class="control-label p-r-20">Compact
								Sidebar Menu</span> <input type="checkbox"
                                                           name="custom-switch-checkbox" class="custom-switch-input"
                                                           id="mini_sidebar_setting"> <span
                                        class="custom-switch-indicator"></span>
                            </label>
                        </div>
                    </div>
                    <div class="mt-3 mb-3 align-center">
                        <a href="#"
                           class="btn btn-icon icon-left btn-outline-primary btn-restore-theme">
                            <i class="fas fa-undo"></i> Restore Default
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <footer class="main-footer">
            <div class="footer-left">
                Copyright &copy; 2020 <div class="bullet"></div> Design By <a href="#">mohsen farsian</a>
            </div>
            <div class="footer-right">
            </div>
        </footer>
    </div>
</div>
<!-- General JS Scripts -->
<script src="assets/js/app.min.js"></script>
<!-- JS Libraies -->
<!-- Page Specific JS File -->
<script src="assets/bundles/datatables/datatables.min.js"></script>
<script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/bundles/datatables/export-tables/dataTables.buttons.min.js"></script>
<script src="assets/bundles/datatables/export-tables/buttons.flash.min.js"></script>
<script src="assets/bundles/datatables/export-tables/jszip.min.js"></script>
<script src="assets/bundles/datatables/export-tables/pdfmake.min.js"></script>
<script src="assets/bundles/datatables/export-tables/vfs_fonts.js"></script>
<script src="assets/bundles/datatables/export-tables/buttons.print.min.js"></script>
<script src="assets/js/page/datatables.js"></script>
<!-- Template JS File -->
<script src="assets/js/scripts.js"></script>
<script src="assets/bundles/jquery.sparkline.min.js"></script>

</body>

</html>