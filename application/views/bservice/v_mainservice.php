			<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $judul;?></h1>
                        <ol class="breadcrumb mb-4">
						</ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i></i>
                                Edit Service Page
                            </div>
                            <div class="card-body">
							<form role="form" action="<?= base_url() ?>admin_service/update_service/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($data->IdPage)) ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Page Name</label>
									<input class="form-control" name="PageName" type="text" value="<?= $data->PageName;?>">
                                </div>
                                <div class="form-group">
                                    <label>Content 1</label>
                                    <textarea name="Text1" class="ckeditor"><?= $data->Text1;?></textarea>
                                </div>
								<div class="form-group">
                                    <label>Content 2</label>
                                    <textarea name="Text2" class="ckeditor"><?= $data->Text2;?></textarea>
                                </div>
                                <button type="submit" class="btn btn-warning">Publish</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </main>
                