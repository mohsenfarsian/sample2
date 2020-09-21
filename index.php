<?php
session_start();
ob_flush();
ob_start();
require ("../dbconfig/config.php");
$object=new model();

if (! isset($_SESSION['user']))
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
  <title>داشبورد</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <link rel="stylesheet" href="assets/bundles/bootstrap-social/bootstrap-social.css">
  <link rel="stylesheet" href="assets/bundles/flag-icon-css/css/flag-icon.min.css">
  <!-- Custom style CSS -->
  
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
  
</head>

<body style="background-color: rgb(245, 245, 245);">
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
	                     <div class="siderbar-profile-name"> <?php if(isset($_SESSION['user'])) { echo ($_SESSION['user']['firstname']." ".$_SESSION['user']['lastname']);} ?> </div>
	                     <div class="siderbar-profile-position">user </div>
	                 </div>
	                 <div class="sidebar-profile-buttons">
                   <a class="tooltips waves-effect waves-block toggled" href="profile.html" data-toggle="tooltip" title="" data-original-title="پروفایل">
	                         <i class="fas fa-user sidebarQuickIcon"></i>
	                     </a>
	                     <a class="tooltips waves-effect waves-block" href="email-inbox.html" data-toggle="tooltip" title="" data-original-title="ایمیل">
	                         <i class="fas fa-envelope sidebarQuickIcon"></i>
	                     </a>
	                     <a class="tooltips waves-effect waves-block" href="support.php" data-toggle="tooltip" title="" data-original-title="پشتیبانی آنلاین">
                        <i class="fas fa-comment-dots  sidebarQuickIcon"></i>
	                     </a>
	                     <a class="tooltips waves-effect waves-block" href="logout.php" data-toggle="tooltip" title="" data-original-title="خروج از حساب کاربری">
                        <i class="fas fa-share-square sidebarQuickIcon"></i>
	                     </a>
	                 </div>
                 </div>
             </li>


              <?php
              $userid=$_SESSION['user']['id'];
              $result=$object->selected("*","`users`"," where `status`=0 and `id`=$userid");
              if($result->rowCount()==1) {
                  $user = $result->fetch();

              if($user['state']==1) {

                    ?>

            <li class="dropdown active">
              <a href="#" class="nav-link"><i class="fas fa-desktop"></i><span>داشبورد</span></a>
            </li>
             <li class="dropdown">
               <a href="#" class="nav-link has-dropdown"><i class="fas fa-desktop"></i><span>ثبت کارگزاری</span></a>
               <ul class="dropdown-menu">
                 <li><a class="nav-link" href="#">ثبت نام قسمت 1</a></li>
                 <li><a class="nav-link" href="../register part 2.html" target="_blank">ثبت نام قسمت 2</a></li>
                 <li><a class="nav-link" href="#">ثبت نام قسمت 3</a></li>
                 <li><a class="nav-link" href="../register part 4.html" target="_blank">ثبت نام قسمت 4</a></li>
                 <li><a class="nav-link" href="#">ثبت نام قسمت 5</a></li>
               </ul>
             </li>
             <li class="dropdown">
               <a href="#" class="nav-link has-dropdown"><i class="fas fa-shopping-bag"></i><span>منابع مالی</span></a>
               <ul class="dropdown-menu">
                 <li><a class="nav-link" href="deposit to broker.php">واریز به کارگزاری</a></li>
                 <li><a class="nav-link" href="Withdrawal Form Broker.php"> برداشت از کارگزاری</a></li>
               </ul>
             </li>

             <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-credit-card"></i><span>وبمانی و پرفکت مانی</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="sales webmani.php">فروش وبمانی و پرفکت مانی</a></li>
                <li><a class="nav-link" href="buy webmani.php">خرید وبمانی و پرفکت مانی</a></li>
              </ul>
             </li>
            <li class="dropdown">
              <a class="nav-link" href="trading-signals.php"><i class="far fa-calendar-alt"></i><span>سیگنال های معاملاتی</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-mars-stroke-h"></i><span>رمز ها</span></a>
              <ul class="dropdown-menu">
                <li><a href="forms/auth-reset-password.php">تغییر کلمه ی عبور</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-credit-card"></i><span>کارت بانکی</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="add a bank card.php">افزودن کارت بانکی</a></li>
              </ul>
            </li>
            
            <li class="dropdown">
              <a href="#" class="nav-link"><i class="fas fa-globe"></i><span>زبان</span></a>
            </li>
            
            <li class="dropdown">
              <a href="support.php" class="nav-link"><i class="fas fa-comment-dots"></i><span>پشتیبانی آنلاین</span></a>
            </li>
              <?php
                }
                else{
                    $err=" کاربر گرامی ابتدا اطلاعات کاربری خود را کامل کنید تا لینک های سایت فعال گردد";
                    ?>
                    <div id="swal-4">
                      <li class="dropdown active">
                          <a href="#" class="nav-link"><i class="fas fa-desktop"></i><span>داشبورد</span></a>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="nav-link has-dropdown"><i class="fas fa-desktop"></i><span>ثبت کارگزاری</span></a>
                          <ul class="dropdown-menu">
                              <li><a class="nav-link" href="#">ثبت نام قسمت 1</a></li>
                              <li><a class="nav-link" href="#">ثبت نام قسمت 2</a></li>
                              <li><a class="nav-link" href="#">ثبت نام قسمت 3</a></li>
                              <li><a class="nav-link" href="#">ثبت نام قسمت 4</a></li>
                              <li><a class="nav-link" href="#">ثبت نام قسمت 5</a></li>
                          </ul>
                      </li>
                      <li class="menu-header">Components</li>
                      <li class="dropdown">
                          <a href="#" class="nav-link has-dropdown"><i class="fas fa-shopping-bag"></i><span>منابع مالی</span></a>
                          <ul class="dropdown-menu">
                              <li><a class="nav-link" href="#">واریز به کارگزاری</a></li>
                              <li><a class="nav-link" href="#"> برداشت از کارگزاری</a></li>
                          </ul>
                      </li>


                      <li class="dropdown">
                          <a href="#" class="nav-link has-dropdown"><i class="fas fa-credit-card"></i><span>وبمانی و پرفکت مانی</span></a>
                          <ul class="dropdown-menu">
                              <li><a class="nav-link" href="#">فروش وبمانی و پرفکت مانی</a></li>
                              <li><a class="nav-link" href="#">خرید وبمانی و پرفکت مانی</a></li>
                          </ul>

                      <li class="dropdown">
                          <a class="nav-link" href="#"><i class="far fa-calendar-alt"></i><span>سیگنال های معاملاتی</span></a>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="nav-link has-dropdown"><i class="fas fa-mars-stroke-h"></i><span>رمز ها</span></a>
                          <ul class="dropdown-menu">
                              <li><a href="#">تغییر کلمه ی عبور</a></li>
                          </ul>
                      </li>

                      <li class="dropdown">
                          <a href="#" class="nav-link has-dropdown"><i class="fas fa-user-tie"></i><span>تایید حساب کاربری </span></a>
                          <ul class="dropdown-menu">
                              <li><a class="nav-link" href="user-information.php">اطلاعات کاربر</a></li>
                          </ul>
                      </li>

                      <li class="dropdown">
                          <a href="#" class="nav-link has-dropdown"><i class="fas fa-credit-card"></i><span>کارت بانکی</span></a>
                          <ul class="dropdown-menu">
                              <li><a class="nav-link" href="#">افزودن کارت بانکی</a></li>
                          </ul>
                      </li>

                      <li class="dropdown">
                          <a href="#" class="nav-link"><i class="fas fa-globe"></i><span>زبان</span></a>
                      </li>

                      <li class="dropdown">
                          <a href="#" class="nav-link"><i class="fas fa-comment-dots"></i><span>پشتیبانی آنلاین</span></a>
                      </li>
                    </div>
              <?php
                }
              }
              ?>
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
									<h1>داشبورد</h1>
								</div>
                                <p style="text-align: right;color: red"><?php if(isset($err)){ echo $err; } ?></p>
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
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card card-sales-widget card-bg-blue-gradient">
                <div class="card-icon shadow-primary bg-blue">
                  <i class="fas fa-user-plus"></i>
                </div>
                <div class="card-wrap pull-right">
                  <div class="card-header">
                    <h3>1,437</h3>
                    <h4>New Clients</h4>
                  </div>
                </div>
                <div class="card-chart">
                  <div id="chart-1"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card card-sales-widget card-bg-yellow-gradient">
                <div class="card-icon shadow-primary bg-warning">
                  <i class="fas fa-drafting-compass"></i>
                </div>
                <div class="card-wrap pull-right">
                  <div class="card-header">
                    <h3>2,021</h3>
                    <h4>Delivered Orders</h4>
                  </div>
                </div>
                <div class="card-chart">
                  <div id="chart-2"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card card-sales-widget card-bg-orange-gradient">
                <div class="card-icon shadow-primary bg-hibiscus">
                  <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-wrap pull-right">
                  <div class="card-header">
                    <h3>5,124</h3>
                    <h4>Total Sales</h4>
                  </div>
                </div>
                <div class="card-chart">
                  <div id="chart-3"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
              <div class="card card-sales-widget card-bg-green-gradient">
                <div class="card-icon shadow-primary bg-green">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap pull-right">
                  <div class="card-header">
                    <h3>$50,789</h3>
                    <h4>Total Earning</h4>
                  </div>
                </div>
                <div class="card-chart">
                  <div id="chart-4"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
          	<div class="col-lg-6 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Monthly Sales</h4>
                </div>
                <div class="card-body">
                 	<div id="monthlySalesChart"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Yearly Sales</h4>
                </div>
                <div class="card-body">
                  <div id="yearlySalesChart"></div>
                </div>
              </div>
            </div>
           </div>
           <div class="row">
            
            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Sales by Social Sources</h4>
                </div>
                <div class="card-body mb-3">
                  <div id="salesBySocialSourceChart"></div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4>Invoice details</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <tr>
                        <th>Order ID</th>
                        <th>Billing Name</th>
                        <th>Total</th>
                        <th>Payment Method</th>
                        <th>Payment Status</th>
                        <th>Action</th>
                      </tr>
                      <tr>
                        <td>#TD1230</td>
                        <td>David Brown</td>
                        <td>150$</td>
                        <td><img alt="image" class="mr-3" width="40" src="assets/img/cards/paypal.png"></td>
                        <td>
                            <div class="badge badge-success badge-shadow">Paid</div>
                        </td>
                        <td>
                          <div class="media-cta-square">
                        	<a href="#" class="btn btn-outline-primary">Detail</a>
                      	</div>
                        
                        </td>
                      </tr>
                      <tr>
                        <td>#TD1231</td>
                        <td>Luna Moore</td>
                        <td>250$</td>
                        <td><img alt="image" class="mr-3" width="40" src="assets/img/cards/visa.png"></td>
                        <td>
                            <div class="badge badge-info badge-shadow">Refund</div>
                        </td>
                        <td>
                          <div class="media-cta-square">
                        	<a href="#" class="btn btn-outline-primary">Detail</a>
                      	</div>
                        
                        </td>
                      </tr>
                       <tr>
                        <td>#TD1232</td>
                        <td>Emma Martin</td>
                        <td>350$</td>
                        <td><img alt="image" class="mr-3" width="40" src="assets/img/cards/americanexpress.png"></td>
                        <td>
                            <div class="badge badge-success badge-shadow">Paid</div>
                        </td>
                        <td>
                          <div class="media-cta-square">
                        	<a href="#" class="btn btn-outline-primary">Detail</a>
                      	</div>
                        
                        </td>
                      </tr>
                       <tr>
                        <td>#TD1233</td>
                        <td>Noah Clark</td>
                        <td>435$</td>
                        <td><img alt="image" class="mr-3" width="40" src="assets/img/cards/mastercard.png"></td>
                        <td>
                            <div class="badge badge-danger badge-shadow">Chargeback</div>
                        </td>
                        <td>
                          <div class="media-cta-square">
                        	<a href="#" class="btn btn-outline-primary">Detail</a>
                      	</div>
                        
                        </td>
                      </tr>
                      <tr>
                        <td>#TD1234</td>
                        <td>William Thomas</td>
                        <td>220$</td>
                        <td><img alt="image" class="mr-3" width="40" src="assets/img/cards/discover.png"></td>
                        <td>
                            <div class="badge badge-info badge-shadow">Refund</div>
                        </td>
                        <td>
                          <div class="media-cta-square">
                        	<a href="#" class="btn btn-outline-primary">Detail</a>
                      	</div>
                        
                        </td>
                      </tr>
                      <tr>
                        <td>#TD1230</td>
                        <td>Olivia Lewis</td>
                        <td>310$</td>
                        <td><img alt="image" class="mr-3" width="40" src="assets/img/cards/jcb.png"></td>
                        <td>
                            <div class="badge badge-success badge-shadow">Paid</div>
                        </td>
                        <td>
                          <div class="media-cta-square">
                        	<a href="#" class="btn btn-outline-primary">Detail</a>
                      	</div>
                        
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
          <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                  <div class="card-header">
                    <h4>User Activity</h4>
                  </div>
                  <div class="card-body">
                    <div class="activities">
                      <div class="activity">
                        <div class="activity-icon text-white">
                          <img alt="image" class="mr-3 timeline-img-border rounded-circle" width="50" src="assets/img/users/user-1.png">
                        </div>
                        <div class="activity-detail">
                          <div class="mb-2">
                            <span class="text-job">2 hour ago</span>
                            <span class="bullet"></span>
                            <a class="text-job" href="#">View</a>
                            <div class="float-right dropdown">
                              <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                              <div class="dropdown-menu">
                                <div class="dropdown-title">Options</div>
                                <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                                <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item has-icon text-danger"
                                  data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                  data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                              </div>
                            </div>
                          </div>
                          <p>Created the task "<a href="#">SR-101</a>". Please let me know if you have any question.</p>
                        </div>
                      </div>
                      <div class="activity">
                        <div class="activity-icon text-white">
                          <img alt="image" class="mr-3 timeline-img-border rounded-circle" width="50" src="assets/img/users/user-2.png">
                        </div>
                        <div class="activity-detail">
                          <div class="mb-2">
                            <span class="text-job">3 hour ago</span>
                            <span class="bullet"></span>
                            <a class="text-job" href="#">View</a>
                            <div class="float-right dropdown">
                              <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                              <div class="dropdown-menu">
                                <div class="dropdown-title">Options</div>
                                <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                                <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item has-icon text-danger"
                                  data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                  data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                              </div>
                            </div>
                          </div>
                          <p>Login to the system with abc@email.com email From US.</p>
                        </div>
                      </div>
                      <div class="activity">
                        <div class="activity-icon text-white">
                          <img alt="image" class="mr-3 timeline-img-border rounded-circle" width="50" src="assets/img/users/user-3.png">
                        </div>
                        <div class="activity-detail">
                          <div class="mb-2">
                            <span class="text-job">12 HOUR AGO</span>
                            <span class="bullet"></span>
                            <a class="text-job" href="#">View</a>
                            <div class="float-right dropdown">
                              <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                              <div class="dropdown-menu">
                                <div class="dropdown-title">Options</div>
                                <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                                <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item has-icon text-danger"
                                  data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                  data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                              </div>
                            </div>
                          </div>
                          <p>closed this task. Because it was already done.</p>
                        </div>
                      </div>
                      <div class="activity">
                        <div class="activity-icon text-white">
                          <img alt="image" class="mr-3 timeline-img-border rounded-circle" width="50" src="assets/img/users/user-5.png">
                        </div>
                        <div class="activity-detail">
                          <div class="mb-2">
                            <span class="text-job">6 hour ago</span>
                            <span class="bullet"></span>
                            <a class="text-job" href="#">View</a>
                            <div class="float-right dropdown">
                              <a href="#" data-toggle="dropdown"><i class="fas fa-ellipsis-h"></i></a>
                              <div class="dropdown-menu">
                                <div class="dropdown-title">Options</div>
                                <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                                <a href="#" class="dropdown-item has-icon"><i class="fas fa-list"></i> Detail</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item has-icon text-danger"
                                  data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                  data-confirm-text-yes="Yes, IDC"><i class="fas fa-trash-alt"></i> Archive</a>
                              </div>
                            </div>
                          </div>
                          <p>Log out of the system.</p>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
             <div class="card">
                <div class="card-header">
                  <h4>Recent Client Feedback</h4>
                </div>
                <div class="card-body mb-2 mt-2">
                  <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder mt-2">
                    <li class="media">
                      <img alt="image" class="mr-3 image-square" width="50" src="assets/img/users/user-8.png">
                      <div class="media-body">
                        <div class="media-title">Robert Nelson</div>
                        <div class="col-blue">
                        	<i class="fa fa-star" aria-hidden="true"></i>
                        	<i class="fa fa-star" aria-hidden="true"></i>
                        	<i class="fa fa-star" aria-hidden="true"></i>
                        	<i class="fa fa-star" aria-hidden="true"></i>
                        	<i class="fa fa-star-half" aria-hidden="true"></i>
                        </div>
                        <div class="text-muted">Lorem ipsum dolor sit amet consec tetur adip ascing elit users.Lorem ipsum dolor sit amet consec tetur adip ascing elit users.Lorem ipsum dolor sit amet consec tetur adip ascing elit users.Lorem ipsum dolor sit amet consec tetur adip ascing elit users...</div>
                        <div class="media-like">
                          <a href="#" class="col-teal"><i class="fas fa-thumbs-up"></i></a>
                          <a href="#" class="col-pink"><i class="fas fa-thumbs-down"></i></a>
                        </div>
                      </div>
                      <div class="media-cta">
                        <div class="text-job text-muted mt-1">10-12-2019 11:50 PM</div>
                      </div>
                    </li>
                    <li class="media">
                      <img alt="image" class="mr-3 image-square" width="50" src="assets/img/users/user-9.png">
                      <div class="media-body">
                        <div class="media-title">Olivia Porter</div>
                        <div class="col-blue">
                        	<i class="fa fa-star" aria-hidden="true"></i>
                        	<i class="fa fa-star" aria-hidden="true"></i>
                        	<i class="fa fa-star" aria-hidden="true"></i>
                        	<i class="fa fa-star" aria-hidden="true"></i>
                        	<i class="fa fa-star-half" aria-hidden="true"></i>
                        </div>
                        <div class="text-muted">Lorem ipsum dolor sit amet consec tetur adip ascing elit users.Lorem ipsum dolor sit amet consec tetur adip ascing elit users.Lorem ipsum dolor sit amet consec tetur adip ascing elit users.Lorem ipsum dolor sit amet consec tetur adip ascing elit users...</div>
                        <div class="media-like">
                          <a href="#" class="col-teal"><i class="fas fa-thumbs-up"></i></a>
                          <a href="#" class="col-pink"><i class="fas fa-thumbs-down"></i></a>
                        </div>
                      </div>
                      <div class="media-cta">
                        <div class="text-job text-muted mt-1">03-01-2020 10:50 PM</div>
                      </div>
                    </li>
                    
                  </ul>
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
  <script src="assets/bundles/sweetalert/sweetalert.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/sweetalert.js"></script>
  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/echart/echarts.js"></script>
  
  <script src="assets/bundles/chartjs/chart.min.js"></script>
  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/bundles/jquery.sparkline.min.js"></script>
  
</body>

</html>