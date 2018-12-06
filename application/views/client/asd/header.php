<body style="background-image: url(<?php echo base_url()?>master/desain.jpg);">
    <div class="preloader">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- Document Wrapper
     ============================================= -->
     <div id="wrapper" class="wrapper clearfix">
        <header id="navbar-spy" class="header header-1 header-transparent header-bordered header-fixed">
            <nav id="primary-menu" class="navbar navbar-fixed-top">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="logo" href="index.html">
                         <img height="80px;" class="logo-light" src="<?php echo base_url()?>gambar/logo.png" alt="granny Logo">
                         <img height="80px;" class="logo-dark" src="<?php echo base_url()?>gambar/logo1.png" alt="granny Logo">
                     </a>
                 </div>

                 <div class="module-container pull-right">
                    <!-- Module Reservation  -->
                    <div class="module module-reservation">
                        <a class="btn-popup" data-toggle="modal" data-target="#reservationModule"><i class="lnr lnr-users"></i>Reservation</a>
                        <div class="modal fade reservation-popup" tabindex="-1" role="dialog" id="reservationModule">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times"></i></button>
                                        <div class="row reservation">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="reservation-form mb-30 bg-white text-center">
                                                    <form method="post" action="http://demo.zytheme.com/granny/assets/php/reservation.php" class="reservationForm mb-0">
                                                        <div class="row">
                                                            \
                                                        </div>
                                                        <!-- .row end -->
                                                    </form>
                                                    <!-- form end -->
                                                </div>
                                                <!-- .contact-form end -->
                                            </div>
                                            <!-- .col-md-8 end -->
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="text-uppercase text-center">
                                                    <strong><span class="text-white">Reservation Powered by</span> <a class="reservation-link" href="#">Opentable</a></strong>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- .row end -->
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                    </div>
                    <!-- Module Search -->
                    <div class="module module-search">
                        <div class="module-icon search-icon">
                            <i class="fa fa-search"></i>
                        </div>
                        <div class="module-content module-fullscreen module--search-box">
                            <div class="pos-vertical-center">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                                            <form class="form-search">
                                                <input type="text" class="form-control" placeholder="Type Search Words Then Enter">
                                                <button class="btn" type="button"><i class="fa fa-search"></i></button>
                                            </form>
                                            <!-- .form-search end -->
                                        </div>
                                        <!-- .col-md-8 end -->
                                    </div>
                                    <!-- .row end -->
                                </div>
                                <!-- .container end -->
                            </div>
                            <a class="module-cancel" href="#">close</a>
                        </div>
                    </div>
                    <!-- .module-search end -->
                    <!-- Module Side NAV -->
                    <div class="module module-side-nav">
                        <div class="module-icon side-nav-icon">
                            <i class="fa fa-bars"></i>
                            <span class="title">Side Navigation</span>
                        </div>
                        <div class="module-content module-hamburger">
                            <div class="hamburger-panel module-widgets bg-white">

    <!-- Recent Posts
        ============================================= -->
        <div class="widget widget-recent-posts">
            <div class="widget--title">
                <h5>recent posts</h5>
            </div>
            <div class="widget--content">
                <div class="entry">
                    <img src="assets/images/blog/thumb/1.jpg" alt="title" />
                    <div class="entry-desc">
                        <div class="entry-meta">
                            <a href="#">Oct 15, 2017</a>
                        </div>
                        <div class="entry-title">
                            <a href="#">The Best Side Dishes for Next Dinner</a>
                        </div>
                    </div>
                </div>
                <!-- .recent-entry end -->

                <div class="entry">
                    <img src="assets/images/blog/thumb/2.jpg" alt="title" />
                    <div class="entry-desc">
                        <div class="entry-meta">
                            <a href="#">sep 15, 2017</a>
                        </div>
                        <div class="entry-title">
                            <a href="#">Cornbread Stuffing Apples and Sausage</a>
                        </div>
                    </div>
                </div>
                <!-- .recent-entry end -->

            </div>
        </div>
        <a class="module-cancel" href="#">close</a>
    </div>
</div>
</div>
</div>
<!-- .module-container end -->

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse pull-right" id="navbar-collapse-1">
    <ul class="nav navbar-nav nav-pos-right navbar-left">
        <!-- Home Menu -->
        <li class="<?php if($this->uri->segment('1')=="Home"){ echo "active";}?>">
            <a href="#satu" class="menu-item">Home</a>

            <!-- .mega-dropdown-menu end -->
        </li>
        <li >
            <a href="#about" class="menu-item">About</a>

            <!-- .mega-dropdown-menu end -->
        </li>
        <li >
            <a href="#produk" class="menu-item">Product</a>

            <!-- .mega-dropdown-menu end -->
        </li>
        <li>
            <a class="menu-item" href="#gallery">gallery</a>
        </li>
        <li >
            <a class="menu-item " href="#channel" >Channel</a>
            
            <!-- .mega-dropdown-menu end -->
        </li>
        <li >
            <a class="menu-item " href="#contact" >Contact</a>
            
            <!-- .mega-dropdown-menu end -->
        </li>

    </ul>
</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container-fluid -->
</nav>

</header>