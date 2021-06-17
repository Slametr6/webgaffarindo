<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $judul;?></h1>
                        <ol class="breadcrumb mb-4">
						</ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i></i>
                                DataTable Reason
                            </div>
							<div style="padding: 10px 0 0 15px;">
                            <a href="<?= base_url() ?>admin_reason/add" class="btn btn-sm btn-primary">Add Data</a>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Reason</th>
                                                <th>Content</th>
                                                <th>Icon</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach ($data as $val) { ?>
                                            <tr>
                                                <td><?= $val->Reason;?></td>
                                                <td><?= substr($val->Content, 0, 700).'...';?></td>
                                                <td><?= $val->Icon;?></td>
                                                <td>
													<a href="<?= base_url() ?>admin_reason/edit/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($val->IdReason)) ?>" class="btn btn-sm btn-primary btn-circle" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pen"></i></a>
                                                    <a onclick="deleteConfirm('<?= base_url() ?>admin_reason/delete/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($val->IdReason)) ?>')" href="#!" class="btn btn-sm btn-danger btn-circle"><i class="fa fa-trash"></i></a>
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
                