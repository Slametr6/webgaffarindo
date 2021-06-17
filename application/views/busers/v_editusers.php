			<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $judul;?></h1>
                        <ol class="breadcrumb mb-4">
						</ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i></i>
                                Edit Users
                            </div>
                            <div class="card-body">
							<form role="form" action="<?= base_url();?>admin_user/update/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($data->IdUser));?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input class="form-control" value="<?= $data->IdUser;?>" name="IdUser" type="text" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" value="<?= $data->UserName;?>" name="UserName" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>User Name</label>
											<input class="form-control" value="<?= $data->NickName;?>" name="NickName" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" value="<?= $data->Email;?>" name="Email" type="text">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="submit" class="btn btn-danger">Reset</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </main>
                