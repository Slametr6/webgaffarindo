			<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $judul;?></h1>
                        <ol class="breadcrumb mb-4">
						</ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i></i>
                                Form Edit Slide
                            </div>
                            <div class="card-body">
							<form role="form" action="<?= base_url() ?>admin_slide/update/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($data->IdSlide)) ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Content</label>
                                            <input class="form-control" value="<?= $data->Content ?>" name="Content" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Image Thumbnail</label>
                                            <input class="form-control" placeholder="Thumbnail" name="Img" type="file">
                                             <img id="blah" src="<?= base_url('/assets/images/sliders/') . $data->Img; ?>" width="40%">
                                            <label id="cek" style="color: #cd5730;font-size:12px">* 1200 x 537 px</label>
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Slide Tittle</label>
                                            <input class="form-control" value="<?= $data->slide_title ?>" name="slide_title" type="text">
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Slide Desc</label>
											<textarea class="form-control" rows="3" name="slide_desc" type="text"><?= $data->slide_desc ?></textarea>
                                            <!-- <input class="form-control 30" value="<?= $data->slide_desc ?>" name="slide_desc" type="text"> -->
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Link</label>
                                            <input class="form-control" value="<?= $data->link ?>" name="link" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="Status" required="">
                                                <?php if ($data->Status == 0) { ?>
                                                    <option value="0">Non Actived</option>
                                                    <option value="1">Actived</option>
                                                <?php }else{ ?>
                                                    <option value="1">Actived</option>
                                                    <option value="0">Non Actived</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </main>

