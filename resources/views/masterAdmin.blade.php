<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ImPrint</title>
  <link rel="shortcut icon" type="image/png" href="source/admin/assets/images/logos/imprintrutgon.png" />
  <link rel="stylesheet" href="source/admin/assets/css/stylepr.css" />
  <link rel="stylesheet" href="source/fontawesome-free-6.4.0-web/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

<body>
  <!--  Body Wrapper -->
  <div class="page" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="source/admin/assets/images/logos/logo.png" width="200" style="margin-left: 10px; margin-top: 3px;" alt="" />
          </a>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="sidebar-item">
              <a class="sidebar-link" href="./index.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-house"></i>
                </span>
                <span class="hide-menu">Home Page</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./user.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-user"></i>
                </span>
                <span class="hide-menu">User Management</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./product.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-layer-group"></i>
                </span>
                <span class="hide-menu"> Product Management</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./originalPr.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-database"></i>
                </span>
                <span class="hide-menu">Original Product Management</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./product-waiting.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-circle-check"></i>
                </span>
                <span class="hide-menu">Product Awaiting Approval</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./provider.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-user-tie"></i>
                </span>
                <span class="hide-menu">Supplier Management</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./banner.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-pager"></i>
                </span>
                <span class="hide-menu"> Banner Management</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./intro.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-photo-film"></i>
                </span>
                <span class="hide-menu"> Intro Management</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./categoryPr.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-folder-tree"></i>
                </span>
                <span class="hide-menu">Product Categories</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./web-analysic.html" aria-expanded="false">
                <span class="spani">
                  <i class="fa-solid fa-chart-line"></i>
                </span>
                <span class="hide-menu">Website Analysis</span>
              </a>
            </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <div class="margin-sidebar"></div>
    <!--  Sidebar End -->

    <!--  Main wrapper -->
    <div class="body-content">
     @yield('contentAdmin')
    </div>
  </div>
</body>
</html>