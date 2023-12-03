  <!-- Navbar -->
  <nav  class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
          </li>


          <li class="nav-item d-none d-sm-inline-block">
              <a href="index3.html" class="nav-link">خانه</a>
          </li>
          <li class="nav-item d-none d-sm-inline-block">
              <a href="#" class="nav-link">تماس</a>
          </li>
      </ul>

      <!-- SEARCH FORM -->
      <form class="form-inline ml-3">
          <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="جستجو" aria-label="Search">
              <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                      <i class="fa fa-search"></i>
                  </button>
              </div>
          </div>
      </form>

      <!-- Right navbar links -->
      <ul class="navbar-nav mr-auto">
          <!-- Messages Dropdown Menu -->
          <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="fa fa-comments-o"></i>
                  <span class="badge badge-danger navbar-badge">3</span>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                  <a href="#" class="dropdown-item">
                      <!-- Message Start -->
                      <div class="media">
                          <img src="panel-resources/dist/img/user1-128x128.jpg" alt="User Avatar"
                              class="img-size-50 ml-3 img-circle">
                          <div class="media-body">
                              <h3 class="dropdown-item-title">
                                  حسام موسوی
                                  <span class="float-left text-sm text-danger"><i class="fa fa-star"></i></span>
                              </h3>
                              <p class="text-sm">با من تماس بگیر لطفا...</p>
                              <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
                          </div>
                      </div>
                      <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                      <!-- Message Start -->
                      <div class="media">
                          <img src="panel-resources/dist/img/user8-128x128.jpg" alt="User Avatar"
                              class="img-size-50 img-circle ml-3">
                          <div class="media-body">
                              <h3 class="dropdown-item-title">
                                  پیمان احمدی
                                  <span class="float-left text-sm text-muted"><i class="fa fa-star"></i></span>
                              </h3>
                              <p class="text-sm">من پیامتو دریافت کردم</p>
                              <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i> 4 ساعت قبل</p>
                          </div>
                      </div>
                      <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                      <!-- Message Start -->

                      <!-- Message End -->
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item dropdown-footer">مشاهده همه پیام‌ها</a>
              </div>
          </li>
          <!-- Notifications Dropdown Menu -->
          <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="fa fa-user-circle"></i>

              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">

                  <div class="dropdown-divider"></div>
                  <a style="color: grey !important;" href="{{ route('profile.edit') }}" class="dropdown-item">
                      <i class="fa fa-gear ml-2"></i> مدیریت پروفایل

                  </a>
                  <div class="dropdown-divider"></div>

                  <form method="POST" class="dropdown-item" action="{{ route('logout') }}">
                      @csrf
                      <i class="fa fa-sign-out ml-2"></i>
                      <button style="cursor: pointer; border:none; background-color: transparent; display:inline-block;" class="nav-link">

                          خروج</button>
                  </form>
                  

              </div>
          </li>


          <li class="nav-item">
              <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                      class="fa fa-th-large"></i></a>
          </li>
      </ul>
  </nav>
  <!-- /.navbar -->
