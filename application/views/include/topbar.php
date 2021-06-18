		<!-- =========================
        Header
    =========================== -->
		<header id="header" class="header header-transparent">
		  <nav class="navbar navbar-expand-lg">
		    <div class="container">
		      <a class="navbar-brand" href="<?= base_url(); ?>">
		        <img src="<?= base_url(); ?>assets/images/favicon/gaffarindo.png" class="logo-light" alt="logo" height="60">
		        <img src="<?= base_url(); ?>assets/images/favicon/gaffarindo.png" class="logo-dark" alt="logo" height="60">
		      </a>
		      <button class="navbar-toggler" type="button">
		        <span class="menu-lines"><span></span></span>
		      </button>
		      <!-- <div class="header__top-right d-none d-lg-block">
		        <ul class="list-unstyled d-flex justify-content-end align-items-center">
		          <li><i class="icon-phone"></i><span>+62 21 82758384</span></li>
		          <li>
		            <div class="dropdown">
		              <button class="btn dropdown-toggle width-auto" id="langDrobdown" data-toggle="dropdown">
		                <i class="icon-map"></i><span>En</span>
		              </button>
		              <div class="dropdown-menu" aria-labelledby="langDrobdown">
		                <a class="dropdown-item" href="#">ID</a>
		                <a class="dropdown-item" href="#">ENG</a>
		              </div>
		            </div>
		          </li>
		        </ul>
		      </div> /.header-top-right -->
		      <div class="collapse navbar-collapse" id="mainNavigation">
		        <ul class="navbar-nav ml-auto">
		          <li class="nav__item with-dropdown">
		            <a href="<?= base_url(); ?>" class="dropdown-toggle nav__item-link">Home</a>
		          </li><!-- /.nav-item -->
		          <li class="nav__item with-dropdown">
		            <a href="#" class="dropdown-toggle nav__item-link">Company</a>
		            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
		            <ul class="dropdown-menu">
		              <li class="nav__item"><a class="nav__item-link" href="<?= base_url(); ?>company">About Us</a>
		              </li> <!-- /.nav-item -->
		              <li class="nav__item"><a class="nav__item-link" href="<?= base_url(); ?>company/gallery">Gallery</a>
		              </li> <!-- /.nav-item -->
		              <li class="nav__item"><a class="nav__item-link" href="<?= base_url() ?>assets/images/about/Compro.pdf" target="_blank">Company Profile</a>
		              </li> <!-- /.nav-item -->
		            </ul><!-- /.dropdown-menu -->
		          </li><!-- /.nav-item -->
		          <li class="nav__item with-dropdown">
		            <a href="<?= base_url(); ?>services" class="dropdown-toggle nav__item-link">Services</a>
		            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
		          </li><!-- /.nav-item -->
		          <!-- <li class="nav__item with-dropdown">
		            <a href="<?= base_url(); ?>projects" class="dropdown-toggle nav__item-link">Project</a>
		            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
		          </li> -->
		          <!-- /.nav-item -->
		          <li class="nav__item">
		            <a href="<?= base_url(); ?>home/contact" class="nav__item-link">Contact Us</a>
		          </li><!-- /.nav-item -->
		        </ul><!-- /.navbar-nav -->
		      </div><!-- /.navbar-collapse -->
		    </div><!-- /.container -->
		  </nav><!-- /.navabr -->
		</header><!-- /.Header -->