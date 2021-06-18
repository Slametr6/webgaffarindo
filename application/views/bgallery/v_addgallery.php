<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $judul;?></h1>
                        <ol class="breadcrumb mb-4">
						</ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i></i>
                                Form Add Gallery
                            </div>
                            <div class="card-body">
							<form role="form" action="<?= base_url() ?>admin_gallery/action_add/" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Image</label>
                                            <div id="imagereal" style="display:none">
                                                <img id="blah" class="foto" src="" style="width:313px;height:188px">
                                            </div>
                                            <input class="form-control" onchange="imgInp(this);" placeholder="Thumbnail" name="Img" type="file" required="">
                                            <label id="cek" style="color: #cd5730;font-size:12px">* 850 x 510 px</label>
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
                
	<script type="text/javascript">
        function imgInp(el) {
            readURL(el);
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    document.getElementById("blah").style.display = "inline";
                    $('#imagereal').attr('style', 'display:block');
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
