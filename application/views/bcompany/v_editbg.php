<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $judul;?></h1>
                        <ol class="breadcrumb mb-4">
						</ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i></i>
                                Edit About Page
                            </div>
                            <div class="card-body">
							<form role="form" action="<?= base_url() ?>admin_bg/update/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($bg->IdBg)) ?>" method="POST" enctype="multipart/form-data">
								<div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Background About</label>
                                            <input class="form-control" placeholder="Thumbnail" name="BgAbout" type="file">
                                             <img id="blah" src="<?= base_url('/assets/images/page-titles/') . $bg->BgAbout; ?>" width="50%">
                                            <label id="cek" style="color: #cd5730;font-size:12px">* 1200 x 537 px</label>
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Background Gallery</label>
                                            <input class="form-control" placeholder="Thumbnail" name="BgGallery" type="file">
                                             <img id="blah" src="<?= base_url('/assets/images/page-titles/') . $bg->BgGallery; ?>" width="50%">
                                            <label id="cek" style="color: #cd5730;font-size:12px">* 1200 x 537 px</label>
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Background Service</label>
                                            <input class="form-control" placeholder="Thumbnail" name="BgService" type="file">
                                             <img id="blah" src="<?= base_url('/assets/images/page-titles/') . $bg->BgService; ?>" width="50%">
                                            <label id="cek" style="color: #cd5730;font-size:12px">* 1200 x 537 px</label>
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Background Contact</label>
                                            <input class="form-control" placeholder="Thumbnail" name="BgContact" type="file">
                                             <img id="blah" src="<?= base_url('/assets/images/page-titles/') . $bg->BgContact; ?>" width="50%">
                                            <label id="cek" style="color: #cd5730;font-size:12px">* 1200 x 537 px</label>
                                        </div>
                                    </div>
								</div>
                                <button type="submit" class="btn btn-warning">Publish</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </main>
                