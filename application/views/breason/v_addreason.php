			<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4"><?= $judul;?></h1>
                        <ol class="breadcrumb mb-4">
						</ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i></i>
                                Form Add Reason
                            </div>
                            <div class="card-body">
							<form role="form" action="<?= base_url() ?>admin_reason/action_add/" method="POST">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Reason</label>
                                            <input class="form-control" placeholder="Input Reason" name="Reason" type="text" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Icon</label>
                                                <select class="form-control" name="Icon" id="Icon" type="text" required="">
        											<option value="icon-hours">icon-hours</option>
        											<option value="icon-airplane">icon-airplane</option>
        											<option value="icon-box">icon-box</option>
        											<option value="icon-boxes">icon-boxes</option>
        											<option value="icon-box-signals">icon-box-signals</option>
        											<option value="icon-card-check">icon-card-check</option>
        											<option value="icon-check-list">icon-check-list</option>
        											<option value="icon-clock">icon-clock</option>
        											<option value="icon-crane">icon-crane</option>
        											<option value="icon-search-worldwide">icon-search-worldwide</option>
        											<option value="icon-credit-cards">icon-credit-cards</option>
        											<option value="icon-target">icon-target</option>
        											<option value="icon-balance">icon-balance</option>
        											<option value="icon-truck-delay">icon-truck-delay</option>
        											<option value="icon-truck">icon-truck</option>
        											<option value="icon-package">icon-package</option>
        											<option value="icon-elevator">icon-elevator</option>
        											<option value="icon-delivery-truck">icon-delivery-truck</option>
        											<option value="icon-open-box">icon-open-box</option>
        											<option value="icon-transfer">icon-transfer</option>
        										</select>
                                            <!--<input class="form-control" placeholder="Input Icon" name="Icon" type="text" required="">-->
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Content</label>
											<textarea class="ckeditor" placeholder="Input Content" name="Content"></textarea>
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
                