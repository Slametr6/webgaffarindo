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
							<form role="form" action="<?= base_url() ?>admin_about/update/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($data->IdPage)) ?>" method="POST" enctype="multipart/form-data">
								<div class="row">
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <label>About Name</label>
                                            <input class="form-control" value="<?= $data->AboutName ?>" name="AboutName" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Image Thumbnail</label>
                                            <input class="form-control" placeholder="Thumbnail" name="Img" type="file">
                                             <img id="blah" src="<?= base_url('/assets/images/about/') . $data->Img; ?>" width="40%">
                                            <label id="cek" style="color: #cd5730;font-size:12px">* 1001 x 666 px</label>
                                        </div>
                                    </div>
								</div>	
                                <div class="form-group">
                                    <label>Content 1</label>
                                    <textarea name="Text1" class="ckeditor"><?= $data->Text1;?></textarea>
                                </div>
								<div class="form-group">
                                    <label>Content 2</label>
                                    <textarea name="Text2" class="ckeditor"><?= $data->Text2;?></textarea>
                                </div>
								<div class="form-group">
                                    <label>Content 3</label>
                                    <textarea name="Text3" class="ckeditor"><?= $data->Text3;?></textarea>
                                </div>
                                <button type="submit" class="btn btn-warning">Publish</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </main>
                