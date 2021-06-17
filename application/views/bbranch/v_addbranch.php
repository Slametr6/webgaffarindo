<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $judul;?></h1>
                        <ol class="breadcrumb mb-4">
						</ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i></i>
                                Form Add Branch
                            </div>
                            <div class="card-body">
							<form role="form" action="<?= base_url() ?>admin_branch/action_add/" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Branch</label>
                                            <input class="form-control" placeholder="Input Branch" name="Branch" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Hours</label>
                                            <input class="form-control" placeholder="Input Phone" name="Phone" type="text" required="">
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Mail</label>
                                            <input class="form-control" placeholder="Input Mail" name="Mail" type="email" required="">
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" placeholder="Input Address" name="Address" type="text" required="">
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input class="form-control" placeholder="Input Location" name="Location" type="text" required="">
                                        </div>
                                    </div>
									<div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Hours</label>
                                            <input class="form-control" placeholder="Input Hours" name="Hours" type="text" required="">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </main>
                