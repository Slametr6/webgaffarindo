<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
		<link href="<?= base_url();?>assets/images/favicon/LOGO Gaffarindo.png" rel="icon">
        <title>Cpanel Admin</title>
        <link href="<?= base_url();?>assets/admin/css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-normal">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
										<!--<h3 class="text-center font-weight-light my-4">Login</h3>-->
										<center>
											<div><img src="<?= base_url();?>assets/images/favicon/gaffarindo.png" width="70%" class="logo-dark" alt="logo"></div>
										</center>
									</div>
                                    <div class="card-body">
										<form role="form" method="POST" action="<?= base_url();?>admin/cek_login">
											<div style="margin:15px 15px">
												<?= $this->session->flashdata('error');?>
											</div>
                                            <div class="form-group">
                                                <!--<label class="small mb-1" for="Nip">NIP</label>-->
                                                <input class="form-control py-4" name="IdUser" type="text" placeholder="Enter NIP" />
                                            </div>
                                            <div class="form-group">
                                                <!--<label class="small mb-1" for="Password">Password</label>-->
                                                <input class="form-control py-4" name="Password" type="password" placeholder="Enter Password" />
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
												<button class="btn btn-primary btn-block">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url();?>assets/admin/js/scripts.js"></script>
    </body>
</html>
