        	  <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
						<ol class="breadcrumb mb-4">
                        </ol>
                        <div class="card mb-4">
							<div class="alert alert-success alert-dismissable">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								Selamat Datang, <a href="#" class="alert-link"><?= $this->session->userdata('NickName') ?></a>.
							</div>
							<div class="slide-item align-v-h bg-overlay">
								<div class="bg-img">
								<center>
									<img src="<?= base_url() ?>assets/images/7.jpg" alt="slide img" width="80%">
								</center>
								</div>
							</div>
                        </div>
                    </div>
                </main>
                