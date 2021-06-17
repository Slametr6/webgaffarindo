		<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="<?= base_url();?>panel">Gaffarindo</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
				<li class="navbar-brand">
					<span style="font-size: 15px;">Welcome, <?= $this->session->userdata('NickName');?></span>
				</li>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url();?>admin/logout/">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="<?= base_url();?>panel">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url();?>admin_user">Manage Users</a>
                                    <a class="nav-link" href="<?= base_url();?>admin_reason">Manage Why Chose Us</a>
                                    <a class="nav-link" href="<?= base_url();?>admin_visimisi">Manage Visi Misi</a>
                                    <a class="nav-link" href="<?= base_url();?>admin_slide">Manage Slide</a>
                                    <a class="nav-link" href="<?= base_url();?>admin_bg">Manage Background</a>
                                    <a class="nav-link" href="<?= base_url();?>admin_sosmed">Manage Sosmed</a>
                                    <a class="nav-link" href="<?= base_url();?>admin_about">Manage Page About</a>
                                    <a class="nav-link" href="<?= base_url();?>admin_service/mainservice">Manage Page Service</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?= base_url();?>admin_service">Services</a>
                                    <a class="nav-link" href="<?= base_url();?>admin_project">Projects</a>
                                    <a class="nav-link" href="<?= base_url();?>admin_gallery">Gallery</a>
                                    <a class="nav-link" href="<?= base_url();?>admin_customer">Customers</a>
                                    <a class="nav-link" href="<?= base_url();?>admin_branch">Branch</a>
                                    <a class="nav-link" href="<?= base_url();?>admin_testimoni">Testimonial</a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
			
			<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
							<button class="close" type="button" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
						<div class="modal-footer">
							<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
							<a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
						</div>
					</div>
				</div>
			</div>
