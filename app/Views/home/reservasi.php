<?= $this->extend('layout') ?>

<?= $this->section('kontainer') ?>
<!--Page Title-->
<section class="page-title" style="background-image: url(<?= base_url() ?>/assets/images/shape/shape-2.png );">
	<div class="auto-container">
		<div class="row clearfix">
			<div class="col-lg-8 col-md-12 col-sm-12 content-column">
				<div class="content-box clearfix">
					<div class="title pull-left">
						<h1>Reservasi</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--End Page Title-->

<!-- Page Reservasi -->
<div class="auto-container">
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg">
							<div class="form-header">
								<h2>Make your reservation</h2>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate laboriosam numquam at</p>
							</div>
						</div>
						<form action="/reserved/save" method="post">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<span class="form-label">Tanggal Pinjam</span>
										<input class="form-control" type="date" name="tgl_pakai">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Waktu Mulai</span>
										<input class="form-control" type="time" name="time_a" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Waktu Berakhir</span>
										<input class="form-control" type="time" name="time_b" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Nama Peminjam</span>
										<input class="form-control" type="text" name="peminjam" 
										value="<?php 
										if (session()->get('username') == TRUE) 
										{ echo (session()->get('username')) ;
										} else { echo " "; } ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="text" name="email" value="<?php 
										if (session()->get('email') == TRUE) 
										{ echo (session()->get('email')) ;
										} else { echo " "; } ?>">
									</div>
								</div>
							</div>
							<div class="form-group">
								<span class="form-label">Laboratorium Room</span>
								<select class="form-control" name="id_lab" required>
									<option value="" selected hidden>Select room type</option>
									<?php foreach($lab as $status) { ?>
										    <?php if ($status['status'] == 1) { ?>
												<option value="<?= $status['id_lab']?>">
													<?php if ($status['id_lab'] == 1)  {
														echo "Software Engineering";
													} else if ($status['id_lab'] == 2) {
														echo "Computer Network and Instrumentation ";
													} else {
														echo "Multimedia Studio";
													}?>
												</option>
											<?php } else { ?>
											<option value="0" disabled>Tidak ada lab yang tersedia</option>
									
											<?php }
												} ?>
								</select>
								<span class="select-arrow"></span>
							</div>
							<div class="form-btn">
								<button class="submit-btn">Booking</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Page Reservasi -->

<?= $this->endSection(); ?>