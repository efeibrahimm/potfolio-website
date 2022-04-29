<!DOCTYPE HTML>
<html lang="en">


<!-- Mirrored from wp.alithemes.com/html/evara/evara-backend//admin by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 01 Aug 2021 15:32:35 GMT -->
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg">
    <!-- Template CSS -->
    <link href="{{asset('evara-backend/assets/css/main.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="screen-overlay"></div>
    <aside class="navbar-aside" id="offcanvas_aside">
        <div class="aside-top">
            <a href="/admin" class="brand-wrap">
                DASHBOARD
            </a>
            <div>
                <button class="btn btn-icon btn-aside-minimize"> <i class="text-muted material-icons md-menu_open"></i> </button>
            </div>
        </div>
        <nav>
            <ul class="menu-aside">
                <li class="menu-item active">
                    <a class="menu-link" href="/admin"> <i class="icon material-icons md-home"></i>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li class="menu-item ">
                    <a class="menu-link" href="/admin/general-setting"> <i class="icon material-icons md-shopping_bag"></i>
                        <span class="text">General Settings</span>
                    </a>
                </li>
                <li class="menu-item ">
                    <a class="menu-link" href="/admin/slider"> <i class="icon material-icons md-shopping_cart"></i>
                        <span class="text">Slider</span>
                    </a>
                  
                </li>
                <li class="menu-item ">
                    <a class="menu-link" href="/admin/services"> <i class="icon material-icons md-store"></i>
                        <span class="text">Services</span>
                    </a>
                  
                </li>
                <li class="menu-item ">
                    <a class="menu-link" href="/admin/experience"> <i class="icon material-icons md-add_box"></i>
                        <span class="text">Experiences</span>
                    </a>
                   
                </li>
                <li class="menu-item ">
                    <a class="menu-link" href="/admin/portfolio"> <i class="icon material-icons md-monetization_on"></i>
                        <span class="text">Portfolio</span>
                    </a>
                
                </li>
                <li class="menu-item ">
                    <a class="menu-link" href="/admin/blog"> <i class="icon material-icons md-person"></i>
                        <span class="text">Blog</span>
                    </a>
              
                </li>
                <li class="menu-item ">
                    <a class="menu-link" href="/admin/main"> <i class="icon material-icons md-person"></i>
                        <span class="text">Main</span>
                    </a>
              
                </li>

            </ul>
            <hr>
          
      
        </nav>
    </aside>
    <main class="main-wrap">
        <header class="main-header navbar">
            <div class="col-search">
            </div>
            <div class="col-nav">
                <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"> <i class="material-icons md-apps"></i> </button>
                <ul class="nav">
                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"> <img class="img-xs rounded-circle" src="{{asset('evara-backend/assets/imgs/people/avatar2.jpg')}}" alt="User"></a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                            <a class="dropdown-item text-danger" href="/logout"><i class="material-icons md-exit_to_app"></i>Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </header>