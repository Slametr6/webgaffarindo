<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $judul;?></h1>
                        <ol class="breadcrumb mb-4">
						</ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i></i>
                                Form Edit Project
                            </div>
                            <div class="card-body">
							<form role="form" action="<?= base_url() ?>admin_project/update/<?= str_replace(array('+', '=', '/'), array('-', '_', '~'), $this->encryption->encrypt($data->IdProject)) ?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Project Title</label>
                                            <input class="form-control" value="<?= $data->ProjectTitle?>" name="ProjectTitle" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Image Thumbnail</label>
                                            <input class="form-control" placeholder="Thumbnail" name="Img" type="file">
                                             <img id="blah" src="<?= base_url('/assets/images/projects/') . $data->Img; ?>" style="width:200px;height:100px">
                                            <label id="cek" style="color: #cd5730;font-size:12px">* 1920 x 1080 px</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="form-control" name="Status" required="">
                                                <?php if ($data->Status == 0) { ?>
                                                    <option value="0">Non Actived</option>
                                                    <option value="1">Actived</option>
                                                <?php }else{ ?>
                                                    <option value="1">Actived</option>
                                                    <option value="0">Non Actived</option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Content</label>
                                            <textarea class="ckeditor" id="ckedtor" name="Content"><?= $data->Content;?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </main>
