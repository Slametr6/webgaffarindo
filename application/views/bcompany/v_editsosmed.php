			<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $judul;?></h1>
                        <ol class="breadcrumb mb-4">
						</ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i></i>
                                Edit Visi Misi
                            </div>
                            <div class="card-body">
							<form role="form" action="<?= base_url() ?>admin_sosmed/update/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($data->IdSosmed)) ?>" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Youtube</label>
                                    <input type="text" name="Youtube" class="form-control" value="<?= $data->Youtube; ?>">
                                </div>
                                <div class="form-group">
                                	<label>Instagram</label>
                                    <input type="text" name="Instagram" class="form-control" value="<?= $data->Instagram; ?>">
                                </div>
                                <button type="submit" class="btn btn-warning">Publish</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </main>
                