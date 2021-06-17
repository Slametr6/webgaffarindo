<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $judul;?></h1>
                        <ol class="breadcrumb mb-4">
						</ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i></i>
                                Form Edit Branch
                            </div>
                            <div class="card-body">
							<form role="form" action="<?= base_url() ?>admin_branch/update/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($data->IdBranch)) ?>" method="POST" enctype="multipart/form-data">
							<div class="row">
                                    <div class="col-lg-6">
										<div class="form-group">
										<label>Branch</label>
										<input class="form-control" value="<?= $data->Branch;?>" name="Branch" type="text">
										</div>
                                    </div>
                                    <div class="col-lg-6">
										<div class="form-group">
										<label>Phone</label>
										<input class="form-control" value="<?= $data->Phone;?>" name="Phone" type="text">
										</div>
                                    </div>
									<div class="col-lg-6">
										<div class="form-group">
										<label>Mail</label>
										<input class="form-control" value="<?= $data->Mail;?>" name="Mail" type="text">
										</div>
                                    </div>
									<div class="col-lg-6">
										<div class="form-group">
										<label>Address</label>
										<input class="form-control" value="<?= $data->Address;?>" name="Address" type="text">
										</div>
                                    </div>
									<div class="col-lg-6">
										<div class="form-group">
										<label>Location</label>
										<input class="form-control" value="<?= $data->Location;?>" name="Location" type="text">
										</div>
                                    </div>
									<div class="col-lg-6">
										<div class="form-group">
										<label>Hours</label>
										<input class="form-control" value="<?= $data->Hours;?>" name="Hours" type="text">
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
                