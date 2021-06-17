            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $judul;?></h1>
                        <ol class="breadcrumb mb-4">
						</ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i></i>
                                DataTable Users
                            </div>
							<div style="padding: 10px 0 0 15px;">
                            <a href="<?= base_url();?>admin_user/add" class="btn btn-sm btn-primary">Add Data</a>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>NIP</th>
                                                <th>User Name</th>
                                                <th>Nick Name</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach ($data as $val) { ?>
                                            <tr>
                                                <td><?= $val->IdUser;?></td>
                                                <td><?= $val->UserName;?></td>
                                                <td><?= $val->NickName;?></td>
                                                <td><?= $val->Email;?></td>
                                                <td>
													<a href="<?= base_url();?>admin_user/edit/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($val->IdUser));?>" class="btn btn-sm btn-primary btn-circle" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pen"></i></a>
                                                    <a onclick="deleteConfirm('<?= base_url();?>admin_user/delete/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($val->IdUser));?>')" href="#!" class="btn btn-sm btn-danger btn-circle"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
										<?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                