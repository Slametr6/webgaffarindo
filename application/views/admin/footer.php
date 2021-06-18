				<footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 2021 <a href="https://www.gaffarindo.com">PT. Gaffarindo Sukses Logistik</a></div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url();?>assets/admin/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url();?>assets/admin/demo/chart-area-demo.js"></script>
        <script src="<?= base_url();?>assets/admin/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="<?= base_url();?>assets/admin//demo/datatables-demo.js"></script>
		<script type="text/javascript">
        function cek_nip(value) {
            $.ajax({
                url: "<?= base_url(); ?>real/cek_nip",
                method: "GET",
                data: {
                    Nip: value,
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    if (data.status == 1) {
                        $('#info').attr("style", 'display:block');
                        $('#cek').html("Nip sudah terdaftar, silahkan coba nik lain!");
                        $("#simpan").attr("disabled", "true");
                    } else {
                        $('#info').attr("style", 'display:none');
                        $('#cek').html('');
                        $("#simpan").removeAttr("disabled");
                    }
                }
            });
        }

        function cek_email(value) {
            $.ajax({
                url: "<?php echo base_url(); ?>real/cek_email",
                method: "GET",
                data: {
                    Email: value,
                },
                async: false,
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    if (data.status == 1) {
                        $('#infoemail').attr("style", 'display:block');
                        $('#cekemail').html("Email sudah terdaftar, silahkan coba email lain!");
                        $("#simpan").attr("disabled", "true");
                    } else {
                        $('#infoemail').attr("style", 'display:none');
                        $('#cekemail').html('');
                        $("#simpan").removeAttr("disabled");
                    }
                }
            });
        }

        function validate_password() {
            var password = $("#password").val();
            if (password.length < 8) {
                $("#password")[0].setCustomValidity("Password minimal 8 karakter");
            } else {
                $("#password")[0].setCustomValidity('');
            }
        }

        function validate_ulangi_password() {
            var password = $("#password").val();
            var ulangi_password = $("#ulangi_password").val();
            if (ulangi_password != password) {
                $("#ulangi_password")[0].setCustomValidity("Password Tidak Sama");
            } else {
                $("#ulangi_password")[0].setCustomValidity('');
            }
        }
    </script>

	<script>
		$(document).ready(function() {
			$('#dataTables-example').DataTable({
				responsive: true
			});
		});

		$('.tooltip-demo').tooltip({
			selector: "[data-toggle=tooltip]",
			container: "body"
		})

		// popover demo
		$("[data-toggle=popover]")
			.popover()
	</script>
	<script>
		function deleteConfirm(url){
			$('#btn-delete').attr('href', url);
			$('#deleteModal').modal();
		}
		
		$(document).ready(function() {
			<?php
			$message = $this->session->flashdata('success');
			if (!empty($message)) { ?>
				swal({
					title: 'Success',
					text: '<?php echo $message ?>',
					icon: "success",
					button: false,
					timer: 1500,
				})
			<?php }
		$message = $this->session->flashdata('error');
		if (!empty($message)) { ?>
				swal({
					title: 'Failed',
					text: '<?php echo $message; ?>',
					icon: "error",
					button: false,
					timer: 2000,
				})
			<?php } ?>
		});
	</script>

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

    </body>
</html>
