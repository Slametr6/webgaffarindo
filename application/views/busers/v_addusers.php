			<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $judul;?></h1>
                        <ol class="breadcrumb mb-4">
						</ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i></i>
                                Form Add Users
                            </div>
                            <div class="card-body">
							<form role="form" action="<?= base_url() ?>admin_user/action_add/" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>NIP</label>
                                            <input class="form-control" placeholder="NIP" name="IdUser" type="text" onkeyup="cek_nip(this.value)" required="">
                                            <div id="info" style="display:none">
                                                <label id="cek" style="color: #cd5730;font-size:12px"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>User Name</label>
                                            <input class="form-control" placeholder="User Name" name="NickName" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" placeholder="Name" name="UserName" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" onkeyup="cek_email(this.value)" placeholder="Email" name="Email" type="email" required="">
                                            <div id="infoemail" style="display:none">
                                                <label id="cekemail" style="color: #cd5730;font-size:12px"></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" id="password" onkeyup="validate_password()" placeholder="Password" name="Password" type="Password" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input class="form-control" id="ulangi_password" onkeyup="validate_ulangi_password()" placeholder="Confirm Password" name="Password" type="Password" required="">
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
                