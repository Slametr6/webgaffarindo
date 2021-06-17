			<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $judul;?></h1>
                        <ol class="breadcrumb mb-4">
						</ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i></i>
                                DataTable Services
                            </div>
							<div style="padding: 10px 0 0 15px;">
                            <a href="<?= base_url();?>admin_service/add" class="btn btn-sm btn-primary">Add Data</a>
                        </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Service Name</th>
                                                <th>Content</th>
                                                <th>Image</th>
                                                <th>Slug</th>
                                                <th>Icon</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										<?php foreach ($data as $val) { ?>
                                            <tr>
                                                <td><?= $val->ServiceName;?></td>
                                                <td><?= $val->Content;?></td>
                                                <td><img src="<?= base_url() ?>assets/images/services/<?= $val->Img;?>" width="100%"></td>
                                                <td><?= $val->Slug;?></td>
                                                <td><?= $val->Icon;?></td>
                                                <?php if ($val->Status == 0) { ?>
                                                    <td class="danger">Not Active</td>
                                                <?php }else{ ?>
                                                    <td>Actived</td>
                                                <?php } ?>
                                                <td>
													<a href="<?= base_url();?>admin_service/edit/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($val->IdService));?>" class="btn btn-sm btn-primary btn-circle" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pen"></i></a>
                                                    <a onclick="deleteConfirm('<?= base_url();?>admin_service/delete/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($val->IdService));?>')" href="#!" class="btn btn-sm btn-danger btn-circle"><i class="fa fa-trash"></i></a>
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
                