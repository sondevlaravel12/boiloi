<header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
      <div class="container">
        <div class="header-top-inner">
          <div class="cnt-account">
            <ul class="list-unstyled">

              {{-- <li><a href="#"><i class="icon fa fa-shopping-cart"></i>Giỏ hàng</a></li> --}}
              {{-- <li><a href="#"><i class="icon fa fa-check"></i>Thanh toán</a></li>  --}}
              <li><a href="#"><i class="icon fa fa-check"></i>Chính sách đổi trả </a></li>
              <li><a href="#"><i class="icon fa fa-check"></i>Điều khoản mua hàng & thanh toán</a></li>
              <li><a href="{{ route('wishlist.index') }}"><i class="icon fa fa-heart"></i>Danh sách yêu thích</a></li>
              @auth
                <li><a href="{{ route('dashboard') }}"><i class="icon fa fa-user"></i>Thông tin tài khoản</a></li>
              @else
                <li><a href="{{ route('login') }}"><i class="icon fa fa-lock"></i>Đăng nhập</a></li>
              @endauth

            </ul>
          </div>
          <!-- /.cnt-account -->

          <div class="cnt-block">
            <ul class="list-unstyled list-inline">

            </ul>
            <!-- /.list-unstyled -->
          </div>
          <!-- /.cnt-cart -->
          <div class="clearfix"></div>
        </div>
        <!-- /.header-top-inner -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
            <!-- ============================================================= LOGO ============================================================= -->
            <div class="logo"> <a href="{{ route('home') }}"> <img style="width:40px;" src="{{ asset('logo_softviet.jpg')}}" alt="logo"> <span style="color:white; font-size:18px;">&nbsp;Softviet</span></a> </div>
            <!-- /.logo -->
            <!-- ============================================================= LOGO : END ============================================================= --> </div>
          <!-- /.logo-holder -->

          <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
            <!-- /.contact-row -->
            <!-- ============================================================= SEARCH AREA ============================================================= -->
            <div class="search-area">
              <form>
                <div class="control-group">
                  <input class="search-field" placeholder="tìm sản phẩm..." />
                  <a class="search-button" href="#" ></a> </div>
              </form>
            </div>
            <!-- /.search-area -->
            <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
          <!-- /.top-search-holder -->

          <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
            <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->

            <div class="dropdown dropdown-cart" id="miniCartHolder"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
              <div class="items-cart-inner">
                <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                <div class="basket-item-count"><span class="count" id="quantity"></span></div>
                <div class="total-price-basket"> <span class="lbl">GH -</span> <span class="total-price"> <span class="sign"></span><span  class="value subtotal"></span> </span> </div>
              </div>
              </a>
              <ul class="dropdown-menu">
                <li>
                    <div id="miniCart">
                        {{-- cart item here  --}}
                    </div>

                    <div class="clearfix cart-total">
                        <div class="pull-right"> <span class="text">Sub Total :</span><span class='price subtotal' id="price"></span> </div>
                        <div class="clearfix"></div>
                        <a href="checkout.html" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a> </div>
                    <!-- /.cart-total-->

                </li>
              </ul>
              <!-- /.dropdown-menu-->
            </div>
            <!-- /.dropdown-cart -->

            <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
          <!-- /.top-cart-row -->
        </div>
        <!-- /.row -->

      </div>
      <!-- /.container -->

    </div>
    <!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
      <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
          <div class="navbar-header">
         <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
         <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="nav-bg-class">
            <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
              <div class="nav-outer">
                <ul class="nav navbar-nav">
                  <li class="active dropdown yamm-fw"> <a href="{{ route('home') }}">Trang chủ</a> </li>
                  <li class="active dropdown yamm-fw"> <a href="{{ route('categories.products.index') }}">Danh mục sản phẩm</a> </li>
                  {{-- <li class="dropdown yamm mega-menu"> <a href="" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">Danh mục sản phẩm</a>
                    <ul class="dropdown-menu container">
                      <li>
                        <div class="yamm-content ">
                          <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                              <h2 class="title">Kaspersky</h2>
                              <ul class="links">
                                <li><a href="#">Kaspersky internet security</a></li>
                                <li><a href="#">Kaspersky Small office </a></li>
                                <li><a href="#">Kaspersky antivirus</a></li>
                                <li><a href="#">Kaspersky vpn</a></li>
                              </ul>
                            </div>
                            <!-- /.col -->
                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                <h2 class="title">Windows</h2>
                                <ul class="links">
                                  <li><a href="#">Window 11</a></li>
                                  <li><a href="#">Window 10 </a></li>
                                  <li><a href="#">Window 7</a></li>
                                </ul>
                            </div>
                              <!-- /.col -->
                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                <h2 class="title">Office</h2>
                                <ul class="links">
                                  <li><a href="#">Office pro plus 2016</a></li>
                                  <li><a href="#">Office pro plus 2019 </a></li>

                                </ul>
                            </div>
                              <!-- /.col -->

                            <div class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image"> <img class="img-responsive" src="{{ asset('frontend/assets/images/banners/top-menu-banner.jpg')}}" alt=""> </div>
                            <!-- /.yamm-content -->
                          </div>
                        </div>
                      </li>
                    </ul>
                  </li> --}}
                  <li class="dropdown hidden-sm"> <a href="category.html">Giới thiệu</a> </li>
                  <li class="dropdown hidden-sm"> <a href="category.html">Tin tức</a> </li>
                  <li class="dropdown hidden-sm"> <a href="category.html">Liên hệ</a> </li>
                  <li class="dropdown  navbar-right special-menu"> <a href="#">Todays offer</a> </li>
                </ul>
                <!-- /.navbar-nav -->
                <div class="clearfix"></div>
              </div>
              <!-- /.nav-outer -->
            </div>
            <!-- /.navbar-collapse -->

          </div>
          <!-- /.nav-bg-class -->
        </div>
        <!-- /.navbar-default -->
      </div>
      <!-- /.container-class -->

    </div>
    <!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->

  </header>
