<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>AbsoluteAdmin - A Responsive Boostrap 3 Admin Dashboard</title>
  <meta name="keywords" content="Bootstrap 3 Admin Dashboard Template Theme" />
  <meta name="description" content="AdminDesigns - Bootstrap 3 Admin Dashboard Theme">
  <meta name="author" content="AdminDesigns">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.ico">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <html dir="ltr" lang="en-US" class="no-js ie8">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>

<body class="admin-elements-page" data-spy="scroll" data-target="#nav-spy" data-offset="300">

  <!-- Start: Main -->
  <div id="main">

    <!-- Start: Header -->
    <header class="navbar navbar-fixed-top navbar-shadow">
      <div class="navbar-branding">
        <a class="navbar-brand" href="dashboard.html">
          <b>H-B</b>管理界面
        </a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
      </div>
      <ul class="nav navbar-nav navbar-left">
        <li class="hidden-xs">
          <a class="request-fullscreen toggle-active" href="#">
            <span class="ad ad-screen-full fs18"></span>
          </a>
        </li>
      </ul>
      <form class="navbar-form navbar-left navbar-search alt" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search..." value="Search...">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">


        <li class="menu-divider hidden-xs">
          <i class="fa fa-circle"></i>
        </li>
        <li class="dropdown menu-merge">
          <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
            <img src="assets/img/avatars/1.jpg" alt="avatar" class="mw30 br64">
            <span class="hidden-xs pl15"> HB技术小组-I </span>
            <span class="caret caret-tp hidden-xs"></span>
          </a>
          <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
            <li class="dropdown-header clearfix">
              <div class="pull-left ml10">
                <select id="user-status">
                  <optgroup label="Current Status:">
                    <option value="1-1">Away</option>
                    <option value="1-2">Offline</option>
                    <option value="1-3" selected="selected">Online</option>
                  </optgroup>
                </select>
              </div>

              <div class="pull-right mr10">
                <select id="user-role">
                  <optgroup label="Logged in As:">
                    <option value="1-1">Client</option>
                    <option value="1-2">Editor</option>
                    <option value="1-3" selected="selected">Admin</option>
                  </optgroup>
                </select>
              </div>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-envelope"></span> Messages
                <span class="label label-warning">2</span>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-user"></span> Friends
                <span class="label label-warning">6</span>
              </a>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-bell"></span> Notifications </a>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-gear"></span> Settings </a>
            </li>
            <li class="dropdown-footer">
              <a href="#" class="">
              <span class="fa fa-power-off pr5"></span> Logout </a>
            </li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-light affix">

      <!-- Start: Sidebar Left Content -->
      <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">

          <!-- Sidebar Widget - Author -->
          <div class="sidebar-widget author-widget">
            <div class="media">
              <a class="media-left" href="#">
                <img src="assets/img/avatars/3.jpg" class="img-responsive">
              </a>
              <div class="media-body">
                <div class="media-links">
                   <a href="#" class="sidebar-menu-toggle">User Menu -</a> <a href="pages_login(alt).html">Logout</a>
                </div>
                <div class="media-author">HB技术小组-I</div>
              </div>
            </div>
          </div>

          <!-- Sidebar Widget - Menu (slidedown) -->
          <div class="sidebar-widget menu-widget">
            <div class="row text-center mbn">
              <div class="col-xs-4">
                <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                  <span class="glyphicon glyphicon-home"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                  <span class="glyphicon glyphicon-inbox"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                  <span class="glyphicon glyphicon-bell"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                  <span class="fa fa-desktop"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                  <span class="fa fa-gears"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                  <span class="fa fa-flask"></span>
                </a>
              </div>
            </div>
          </div>

          <!-- Sidebar Widget - Search (hidden) -->
          <div class="sidebar-widget search-widget hidden">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-search"></i>
              </span>
              <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
            </div>
          </div>

        </header>
        <!-- End: Sidebar Header -->

        <!-- Start: Sidebar Menu -->
        <ul class="nav sidebar-menu">
          <li class="sidebar-label pt20">Menu</li>
          <li>

          
          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-shopping-cart"></span>
              <span class="sidebar-title">用户管理</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="ecommerce_dashboard.html">
                  <span class="glyphicon glyphicon-shopping-cart"></span> 管理员用户
                  <span class="label label-xs bg-danger">☆</span>
                </a>
              </li>
              <li>
                <a href="ecommerce_products.html">
                  <span class="glyphicon glyphicon-tags"></span> 一般用户 </a>
              </li>
              <li>
                <a href="ecommerce_orders.html">
                  <span class="fa fa-money"></span> 黑名单列表 </a>
              </li>

            </ul>
          </li>

          
          <li>
            <a class="accordion-toggle menu-open" href="#">
              <span class="glyphicon glyphicon-fire"></span>
              <span class="sidebar-title">个人介绍修改</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="admin_biography-member1.html">
                  <span class="glyphicon glyphicon-equalizer"></span> 段欣伯 </a>
              </li>
              <li>
                <a href="admin_biography-member2.html">
                  <span class="glyphicon glyphicon-equalizer"></span> 王理智 </a>
              </li>
              <li class="active">
                <a href="admin_biography-member3.html">
                  <span class="glyphicon glyphicon-equalizer"></span> 姚宗海 </a>
              </li>
               <li>
                <a href="admin_biography-member4.html">
                  <span class="glyphicon glyphicon-equalizer"></span> 张鹏程 </a>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-check"></span>
              <span class="sidebar-title"> 文章管理 </span>
              <span class="sidebar-title-tray">
                <span class="label label-xs bg-danger">Hot</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="admin_forms-elements.html">
                  <span class="glyphicon glyphicon-edit"></span> 修改文章 </a>
              </li>
              <li>
                <a href="admin_forms-beiyong1.html">
                  <span class="glyphicon glyphicon-calendar"></span> 备用1 </a>
              </li>
              <li>
                <a href="admin_forms-beiyong2.html">
                  <span class="glyphicon glyphicon-check"></span> 备用2 </a>
              </li>
            </ul>
            </li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="fa fa-diamond"></span>
              <span class="sidebar-title"> 留言管理 </span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a href="widgets_tile.html">
                  <span class="fa fa-cube"></span> Test1 </a>
              </li>
              <li>
                <a href="widgets_panel.html">
                  <span class="fa fa-desktop"></span> Test2 </a>
              </li>
              <li>
                <a href="widgets_scroller.html">
                  <span class="fa fa-columns"></span> Test3 </a>
              </li>
              <li>
                <a href="widgets_data.html">
                  <span class="fa fa-dot-circle-o"></span> Admin Widgets </a>
              </li>
            </ul>
          </li>





          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-duplicate"></span>
              <span class="sidebar-title">Pages</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-gears"></span> Utility
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="landing-page/landing1/index.html" target="_blank"> Landing Page </a>
                  </li>
                  <li>
                    <a href="pages_confirmation.html" target="_blank"> Confirmation
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_login.html" target="_blank"> Login </a>
                  </li>
                  <li>
                    <a href="pages_login(alt).html" target="_blank"> Login Alt
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_register.html" target="_blank"> Register </a>
                  </li>
                  <li>
                    <a href="pages_register(alt).html" target="_blank"> Register Alt
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_screenlock.html" target="_blank"> Screenlock </a>
                  </li>
                  <li>
                    <a href="pages_screenlock(alt).html" target="_blank"> Screenlock Alt
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_forgotpw.html" target="_blank"> Forgot Password </a>
                  </li>
                  <li>
                    <a href="pages_forgotpw(alt).html" target="_blank"> Forgot Password Alt
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_coming-soon.html" target="_blank"> Coming Soon
                    </a>
                  </li>
                  <li>
                    <a href="pages_404.html"> 404 Error </a>
                  </li>
                  <li>
                    <a href="pages_500.html"> 500 Error </a>
                  </li>
                  <li>
                    <a href="pages_404(alt).html"> 404 Error Alt </a>
                  </li>
                  <li>
                    <a href="pages_500(alt).html"> 500 Error Alt </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-desktop"></span> Basic
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="pages_search-results.html">Search Results
                      <span class="label label-xs bg-primary">New</span>
                    </a>
                  </li>
                  <li>
                    <a href="pages_profile.html"> Profile </a>
                  </li>
                  <li>
                    <a href="pages_timeline.html"> Timeline Split </a>
                  </li>
                  <li>
                    <a href="pages_timeline-single.html"> Timeline Single </a>
                  </li>
                  <li>
                    <a href="pages_faq.html"> FAQ Page </a>
                  </li>
                  <li>
                    <a href="pages_calendar.html"> Calendar </a>
                  </li>
                  <li>
                    <a href="pages_messages.html"> Messages </a>
                  </li>
                  <li>
                    <a href="pages_messages(alt).html"> Messages Alt </a>
                  </li>
                  <li>
                    <a href="pages_gallery.html"> Gallery </a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="accordion-toggle" href="#">
                  <span class="fa fa-usd"></span> Misc
                  <span class="caret"></span>
                </a>
                <ul class="nav sub-nav">
                  <li>
                    <a href="pages_invoice.html"> Printable Invoice </a>
                  </li>
                  <li>
                    <a href="pages_blank.html"> Blank </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>




          <!-- sidebar progress bars -->
          <li class="sidebar-label pt25 pb10">User Stats</li>
          <li class="sidebar-stat">
            <a href="#projectOne" class="fs11">
              <span class="fa fa-inbox text-info"></span>
              <span class="sidebar-title text-muted">Email Storage</span>
              <span class="pull-right mr20 text-muted">35%</span>
              <div class="progress progress-bar-xs mh20 mb10">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                  <span class="sr-only">35% Complete</span>
                </div>
              </div>
            </a>
          </li>
          <li class="sidebar-stat">
            <a href="#projectOne" class="fs11">
              <span class="fa fa-dropbox text-warning"></span>
              <span class="sidebar-title text-muted">Bandwidth</span>
              <span class="pull-right mr20 text-muted">58%</span>
              <div class="progress progress-bar-xs mh20">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 58%">
                  <span class="sr-only">58% Complete</span>
                </div>
              </div>
            </a>
          </li>
        </ul>
        <!-- End: Sidebar Menu -->

        <!-- Start: Sidebar Collapse Button -->
        <div class="sidebar-toggle-mini">
          <a href="#">
            <span class="fa fa-sign-out"></span>
          </a>
        </div>
        <!-- End: Sidebar Collapse Button -->

      </div>
      <!-- End: Sidebar Left Content -->

    </aside>

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">


      <!-- Start: Topbar -->
      <header id="topbar" class="alt">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="dashboard.html">Dashboard</a>
            </li>
            <li class="crumb-icon">
              <a href="dashboard.html">
                <span class="glyphicon glyphicon-home"></span>
              </a>
            </li>
            <li class="crumb-link">
              <a href="index.html">主页</a>
            </li>
            <li class="crumb-trail">控制面板</li>
          </ol>
        </div>

      <!-- Begin: Content -->
      <section id="content" class="table-layout animated fadeIn">

        <!-- begin: .tray-center -->
        <div class="tray tray-center">

          <div class="mw1000 center-block">

            <!-- Begin: Content Header -->
            <div class="content-header">
              <h2> 欢迎来到 <b> 管理员界面 </b> </h2>
            <!--  <p class="lead">We even included dozens of prebuilt form layouts so you can leave work early</p>-->
            </div>

            <!-- Begin: Admin Form -->
            <div class="admin-form">

              <div class="panel heading-border">
                <div class="panel-body bg-light">
                  <form method="post" action="" id="form-ui">
                    <div class="section-divider mb40" id="spy1">
                      <span>在这修改个人简介吧</span>
                    </div>
                    <!-- .section-divider -->


                    <!-- Text Areas -->
                    <div class="row">
                      <div class="col-md-8">
                        <div class="section">
                          <label class="field prepend-icon">
                            <textarea class="gui-textarea" id="comment" name="comment" placeholder="Text area"></textarea>
                            <label for="comment" class="field-icon">
                              <i class="fa fa-comments"></i>
                            </label>
                            <span class="input-footer">
                              <strong>Tips:</strong>姚宗海是嘴最大的！ </span>
                          </label>
                        </div>
                      </div>
             <!--         <div class="col-md-4">
                        <div class="section">
                          <label class="field prepend-icon">
                            <textarea class="gui-textarea" id="comment" name="comment" placeholder="Disabled Text area" disabled></textarea>
                            <label for="comment" class="field-icon">
                              <i class="fa fa-comments"></i>
                            </label>
                            <span class="input-footer">
                              <strong>Hint:</strong>Don't be negative or off topic!</span>
                          </label>
                        </div>
                      </div>
                      -->
                    </div>


                    <!-- .section-divider -->

                    <div class="section-divider mv40 hidden">
                      <span class="bg-light">Buttons</span>
                    </div>
                    <!-- .tagline -->

                    <div class="section button-list hidden">
                      <button class="button">
                        <i class="fa fa-align-left"></i>
                      </button>
                      <button class="button">
                        <i class="fa fa-align-justify"></i>
                      </button>
                      <a href="javascript:;" class="button">
                        <i class="fa fa-align-center"></i>
                      </a>
                      <a href="javascript:;" class="button">
                        <i class="fa fa-align-right"></i>
                      </a>
                      <a href="javascript:;" class="button">
                        <i class="fa fa-align-center"></i>
                      </a>
                      <a href="javascript:;" class="button btn-primary">
                        <i class="fa fa-align-right"></i>
                      </a>
                      <button class="button btn-primary">
                        <i class="fa fa-align-left"></i>
                      </button>
                      <button class="button btn-primary">
                        <i class="fa fa-align-justify"></i>
                      </button>
                      <a href="javascript:;" class="button btn-primary">
                        <i class="fa fa-align-center"></i>
                      </a>
                      <a href="javascript:;" class="button btn-primary">
                        <i class="fa fa-align-right"></i>
                      </a>
                    </div>
                    <!-- end section -->

                    <div class="section button-list hidden">
                      <input type="submit" value="Button normal" class="button">
                      <button class="button btn-primary">Button primary</button>
                      <a href="javascript:;" class="button btn-rounded">Button rounded</a>
                      <a href="javascript:;" class="button btn-primary btn-rounded">Primary rounded</a>
                    </div>
                    <!-- end section -->

                    <div class="section button-list hidden">
                      <input type="submit" value="Pushed normal" class="button pushed">
                      <button class="button pushed btn-primary">Pushed primary</button>
                      <a href="javascript:;" class="button pushed btn-rounded">Pushed round</a>
                      <a href="javascript:;" class="button pushed btn-primary btn-rounded">Pushed round</a>
                    </div>
                    <!-- end section -->

                    <div class="section button-list hidden">
                      <button class="button button-left">Button Left</button>
                      <button class="button button-right">Button right</button>
                      <a href="javascript:;" class="button btn-primary button-left">Primary Left</a>
                      <a href="javascript:;" class="button btn-primary button-right">Primary Right</a>
                    </div>
                    <!-- end section -->

                    <div class="section button-list hidden">
                      <button class="button btn-pointed button-left">Pointed Left</button>
                      <button class="button btn-pointed button-right">Pointed right</button>
                      <a href="javascript:;" class="button btn-pointed btn-primary button-left">Pointed Left</a>
                      <a href="javascript:;" class="button btn-pointed  btn-primary button-right">Pointed Right</a>
                    </div>
                    <!-- end section -->

                    <div class="section-divider hidden">
                      <span class="bg-light">Simple Pricing Grid</span>
                    </div>
                    <!-- .tagline -->

                    <!-- Pricing Tables -->
                    <div class="section row hidden">
                      <div class="col-md-6">
                        <div class="section">
                          <div class="price-box">
                            <h4><sup>$</sup>29
                              <span class="per-month">/month</span>
                            </h4>
                            <h5>Starter</h5>
                            <div class="spacer mt20 mb20"></div>
                            <p>For those looking for something simple to get started.</p>
                            <div class="spacer mt20 mb20"></div>
                            <a href="#" class="button block pushed expand"> Learn more </a>
                          </div>
                          <!-- end .price-box section -->

                        </div>
                        <!-- end .section section -->
                      </div>
                      <!-- end .colm section -->

                      <div class="col-md-6">
                        <div class="section">
                          <div class="price-box selected-box">
                            <div class="ribbon-large">
                              <div class="ribbon-inner">POPULAR</div>
                            </div>
                            <h4><sup>$</sup>179
                              <span class="per-month">/month</span>
                            </h4>
                            <h5>Professional</h5>
                            <div class="spacer mt20 mb20"></div>
                            <p>For large enterprises selling over one million plus a year.</p>
                            <div class="spacer mt20 mb20"></div>
                            <a href="#" class="button btn-primary block pushed expand"> Learn more </a>
                          </div>
                          <!-- end .price-box section -->

                        </div>
                        <!-- end .section section -->
                      </div>
                      <!-- end .colm section -->

                    </div>
                    <!-- end section row section -->

                    <div class="section-divider mv40 hidden">
                      <span class="bg-light">Google Map</span>
                    </div>
                    <!-- .tagline -->

                    <!-- Google Map -->
                    <div class="section hidden">
                      <div class="map-container">
                        <div id="map_canvas"></div>
                      </div>
                      <!-- end .map-container -->
                    </div>
                    <!-- end .section -->

                    <!-- Notifications + Progress Bars -->
                    <div class="section-divider mv40 hidden">
                      <span class="bg-light">Notifications + Progress Bars</span>
                    </div>
                    <div class="section hidden">
                      <div class="progress">
                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                          <span class="sr-only">40% Complete (success)</span>
                        </div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                          <span class="sr-only">40% Complete (success)</span>
                        </div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                          <span class="sr-only">60% Complete (warning)</span>
                        </div>
                      </div>
                      <div class="progress">
                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                          <span class="sr-only">80% Complete (danger)</span>
                        </div>
                      </div>
                      <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                          <span aria-hidden="true">×</span>
                          <span class="sr-only">Close</span>
                        </button>
                        <strong>Well done!</strong>You successfully read this important alert message.</div>
                      <div class="alert alert-info alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                          <span aria-hidden="true">×</span>
                          <span class="sr-only">Close</span>
                        </button>
                        <strong>Heads up!</strong>This alert needs your attention, but it's not super important.</div>
                      <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                          <span aria-hidden="true">×</span>
                          <span class="sr-only">Close</span>
                        </button>
                        <strong>Warning!</strong>Better check yourself, you're not looking too good.</div>
                      <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert">
                          <span aria-hidden="true">×</span>
                          <span class="sr-only">Close</span>
                        </button>
                        <strong>Oh snap!</strong>Change a few things up and try submitting again.</div>
                    </div>
                    <!-- end .section section -->

                    <!-- end .form-body section -->
                  <div class="panel-footer text-right">
                    <button type="submit" class="button btn-primary"> 确定提交 </button>
                    <button type="reset" class="button"> 取消 </button>
                  </div>
                    <!-- end .form-footer section -->

                                        <div class="section-divider mv40" id="spy2">
                      <span>End</span>
                    </div>
                  </form>
                </div>
              </div>

            </div>

          </div>
        </div>
        <!-- end: .tray-center -->

    

      </section>
      <!-- End: Content -->

    </section>

    <!-- Start: Right Sidebar -->
    <aside id="sidebar_right" class="nano affix">

      <!-- Start: Sidebar Right Content -->
      <div class="sidebar-right-content nano-content">

        <div class="tab-block sidebar-block br-n">
          <ul class="nav nav-tabs tabs-border nav-justified hidden">
            <li class="active">
              <a href="#sidebar-right-tab1" data-toggle="tab">Tab 1</a>
            </li>
            <li>
              <a href="#sidebar-right-tab2" data-toggle="tab">Tab 2</a>
            </li>
            <li>
              <a href="#sidebar-right-tab3" data-toggle="tab">Tab 3</a>
            </li>
          </ul>
          <div class="tab-content br-n">
            <div id="sidebar-right-tab1" class="tab-pane active">

              <h5 class="title-divider text-muted mb20"> Server Statistics
                <span class="pull-right"> 2013
                  <i class="fa fa-caret-down ml5"></i>
                </span>
              </h5>
              <div class="progress mh5">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                  <span class="fs11">DB Request</span>
                </div>
              </div>
              <div class="progress mh5">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                  <span class="fs11 text-left">Server Load</span>
                </div>
              </div>
              <div class="progress mh5">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                  <span class="fs11 text-left">Server Connections</span>
                </div>
              </div>

              <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
              <div class="row">
                <div class="col-xs-5">
                  <h3 class="text-primary mn pl5">132</h3>
                </div>
                <div class="col-xs-7 text-right">
                  <h3 class="text-success-dark mn">
                    <i class="fa fa-caret-up"></i> 13.2% </h3>
                </div>
              </div>

              <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
              <div class="row">
                <div class="col-xs-5">
                  <h3 class="text-primary mn pl5">212</h3>
                </div>
                <div class="col-xs-7 text-right">
                  <h3 class="text-success-dark mn">
                    <i class="fa fa-caret-up"></i> 25.6% </h3>
                </div>
              </div>

              <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
              <div class="row">
                <div class="col-xs-5">
                  <h3 class="text-primary mn pl5">82.5</h3>
                </div>
                <div class="col-xs-7 text-right">
                  <h3 class="text-danger mn">
                    <i class="fa fa-caret-down"></i> 17.9% </h3>
                </div>
              </div>

              <h5 class="title-divider text-muted mt40 mb20"> Server Statistics
                <span class="pull-right text-primary fw600">USA</span>
              </h5>


            </div>
            <div id="sidebar-right-tab2" class="tab-pane"></div>
            <div id="sidebar-right-tab3" class="tab-pane"></div>
          </div>
          <!-- end: .tab-content -->
        </div>
      </div>
    </aside>
    <!-- End: Right Sidebar -->

  </div>
  <!-- End: Main -->

  <style>
  /* demo page styles */
  body { min-height: 2300px; }

  .content-header b,
  .admin-form .panel.heading-border:before,
  .admin-form .panel .heading-border:before {
    transition: all 0.7s ease;
  }
  /* responsive demo styles */
  @media (max-width: 800px) {
    .admin-form .panel-body { padding: 18px 12px; }
    .option-group .option { display: block; }
    .option-group .option + .option { margin-top: 8px; }
  }
  </style>


  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="vendor/jquery/jquery-1.11.1.min.js"></script>
  <script src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

  <!-- Theme Javascript -->
  <script src="assets/js/utility/utility.js"></script>
  <script src="assets/js/demo/demo.js"></script>
  <script src="assets/js/main.js"></script>
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core
    Core.init();

    // Init Demo JS
    Demo.init();


    // Form Switcher
    $('#form-switcher > button').on('click', function() {
      var btnData = $(this).data('form-layout');
      var btnActive = $('#form-elements-pane .admin-form.active');

      // Remove any existing animations and then fade current form out
      btnActive.removeClass('slideInUp').addClass('animated fadeOutRight animated-shorter');
      // When above exit animation ends remove leftover classes and animate the new form in
      btnActive.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        btnActive.removeClass('active fadeOutRight animated-shorter');
        $('#' + btnData).addClass('active animated slideInUp animated-shorter')
      });
    });

    // Cache several DOM elements
    var pageHeader = $('.content-header').find('b');
    var adminForm = $('.admin-form');
    var options = adminForm.find('.option');
    var switches = adminForm.find('.switch');
    var buttons = adminForm.find('.button');
    var Panel = adminForm.find('.panel');

    // Form Skin Switcher
    $('#skin-switcher a').on('click', function() {
      var btnData = $(this).data('form-skin');

      $('#skin-switcher a').removeClass('item-active');
      $(this).addClass('item-active')

      adminForm.each(function(i, e) {
        var skins = 'theme-primary theme-info theme-success theme-warning theme-danger theme-alert theme-system theme-dark';
        var panelSkins = 'panel-primary panel-info panel-success panel-warning panel-danger panel-alert panel-system panel-dark';
        $(e).removeClass(skins).addClass('theme-' + btnData);
        Panel.removeClass(panelSkins).addClass('panel-' + btnData);
        pageHeader.removeClass().addClass('text-' + btnData);
      });

      $(options).each(function(i, e) {
        if ($(e).hasClass('block')) {
          $(e).removeClass().addClass('block mt15 option option-' + btnData);
        } else {
          $(e).removeClass().addClass('option option-' + btnData);
        }
      });
      $(switches).each(function(i, ele) {
        if ($(ele).hasClass('switch-round')) {
          if ($(ele).hasClass('block')) {
            $(ele).removeClass().addClass('block mt15 switch switch-round switch-' + btnData);
          } else {
            $(ele).removeClass().addClass('switch switch-round switch-' + btnData);
          }
        } else {
          if ($(ele).hasClass('block')) {
            $(ele).removeClass().addClass('block mt15 switch switch-' + btnData);
          } else {
            $(ele).removeClass().addClass('switch switch-' + btnData);
          }
        }

      });
      buttons.removeClass().addClass('button btn-' + btnData);
    });

    setTimeout(function() {
      adminForm.addClass('theme-primary');
      Panel.addClass('panel-primary');
      pageHeader.addClass('text-primary');

      $(options).each(function(i, e) {
        if ($(e).hasClass('block')) {
          $(e).removeClass().addClass('block mt15 option option-primary');
        } else {
          $(e).removeClass().addClass('option option-primary');
        }
      });
      $(switches).each(function(i, ele) {

        if ($(ele).hasClass('switch-round')) {
          if ($(ele).hasClass('block')) {
            $(ele).removeClass().addClass('block mt15 switch switch-round switch-primary');
          } else {
            $(ele).removeClass().addClass('switch switch-round switch-primary');
          }
        } else {
          if ($(ele).hasClass('block')) {
            $(ele).removeClass().addClass('block mt15 switch switch-primary');
          } else {
            $(ele).removeClass().addClass('switch switch-primary');
          }
        }
      });
      buttons.removeClass().addClass('button btn-primary');
    }, 800);

  });
  </script>
  <!-- END: PAGE SCRIPTS -->

</body>

</html>