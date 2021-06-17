<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $judul;?></h1>
                        <ol class="breadcrumb mb-4">
						</ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i></i>
                                DataTable Branch
                            </div>
							<div style="padding: 10px 0 0 15px;">
                            <a href="<?= base_url() ?>admin_branch/add" class="btn btn-sm btn-primary">Add Data</a>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Branch</th>
                                                <th>Phone</th>
                                                <th>Mail</th>
                                                <th>Address</th>
                                                <th>Location</th>
                                                <th>Hours</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach ($data as $val) { ?>
                                            <tr>
                                                <td><?= $val->Branch;?></td>
                                                <td><?= $val->Phone;?></td>
                                                <td><?= $val->Mail;?></td>
                                                <td><?= $val->Address;?></td>
                                                <td><?= $val->Location;?></td>
                                                <td><?= $val->Hours;?></td>
                                                <td>
													<a href="<?= base_url() ?>admin_branch/edit/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($val->IdBranch)) ?>" class="btn btn-sm btn-primary btn-circle" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pen"></i></a>
                                                    <a onclick="deleteConfirm('<?= base_url() ?>admin_branch/delete/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($val->IdBranch)) ?>')" href="#!" class="btn btn-sm btn-danger btn-circle"><i class="fa fa-trash"></i></a>
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
                